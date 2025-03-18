<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

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
        return view('blog.create');
    }

    // STORE - Save New Post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('message', 'Post created!');
    }

    // SHOW - Display Single Post
    public function show($slug)
    {
        return view('blog.show')->with('post', Post::where('slug', $slug)->first());
    }

    // EDIT - Show Post Edit Form
    public function edit($slug)
    {
        return view('blog.edit')->with('post', Post::where('slug', $slug)->first());
    }

    // UPDATE - Save Edited Post
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Post::where('slug', $slug)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('message', 'Post updated!');
    }

    // DESTROY - Delete Post
    public function destroy($slug)
    {
        Post::where('slug', $slug)->delete();
        return redirect('/blog')->with('message', 'Post deleted!');
    }
}
