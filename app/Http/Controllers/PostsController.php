<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    // Index - Shows Featured + All Posts
    public function index()
    {
        $featuredPosts = Post::orderBy('created_at', 'DESC')->take(3)->get();
        $posts = Post::orderBy('updated_at', 'DESC')->get();

        return view('blog.index', compact('featuredPosts', 'posts'));
    }

    // CREATE - Show Post Creation Form
    public function create()
    {
        $categories = [
            'Kitten Care',
            'Behavior',
            'DIY Projects',
            'Senior Care',
            'Nutrition',
            'Rescue Stories'
        ];

        return view('blog.create', compact('categories'));
    }

    // STORE - Save New Post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'nullable|string|max:100',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // Handle image upload (using storage instead of public)
        $imagePath = $request->file('image')->store('posts', 'public');

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $imagePath,
            'user_id' => auth()->id()
        ]);

        return redirect('/blog')
            ->with('success', 'Your post has been created successfully!');
    }

    // SHOW - Display Single Post
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            return redirect('/blog')->with('error', 'Post not found');
        }

        return view('blog.show')->with('post', $post);
    }

    // EDIT - Show Post Edit Form
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = [
            'Kitten Care',
            'Behavior',
            'DIY Projects',
            'Senior Care',
            'Nutrition',
            'Rescue Stories'
        ];

        // Check if user is authorized to edit
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/blog')->with('error', 'Unauthorized action');
        }

        return view('blog.edit', compact('post', 'categories'));
    }

    // UPDATE - Save Edited Post
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'nullable|string|max:100',
            'image' => 'nullable|mimes:jpg,png,jpeg|max:5048'
        ]);

        $post = Post::where('slug', $slug)->first();

        // Check if user is authorized to update
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/blog')->with('error', 'Unauthorized action');
        }

        $updateData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'user_id' => auth()->id()
        ];

        // Handle new image upload if provided
        if ($request->hasFile('image')) {
            // Delete old image
            Storage::delete('public/' . $post->image_path);

            // Store new image
            $imagePath = $request->file('image')->store('posts', 'public');
            $updateData['image_path'] = $imagePath;
        }

        $post->update($updateData);

        return redirect('/blog/' . $post->slug)
            ->with('success', 'Post updated successfully!');
    }

    // DESTROY - Delete Post
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->first();

        // Check if user is authorized to delete
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/blog')->with('error', 'Unauthorized action');
        }

        // Delete associated image
        Storage::delete('public/' . $post->image_path);

        $post->delete();

        return redirect('/blog')
            ->with('success', 'Post deleted successfully!');
    }
}
