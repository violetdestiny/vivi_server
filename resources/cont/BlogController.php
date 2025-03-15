class BlogController extends Controller
{
public function index()
{
// Get featured posts
$featuredPosts = Post::where('is_featured', true)->take(3)->get();

// Get paginated regular posts
$posts = Post::paginate(9);

return view('blog.index', [
'featuredPosts' => $featuredPosts,
'posts' => $posts
]);
}

public function create()
{
// Show post creation form
return view('blog.create');
}

public function store(Request $request)
{
// Handle new post submission
$validated = $request->validate([
'title' => 'required|max:255',
'content' => 'required'
]);

Post::create($validated);

return redirect('/blog');
}

public function show(Post $post)
{
// Display single post
return view('blog.show', compact('post'));
}

public function edit(Post $post)
{
// Show post edit form
return view('blog.edit', compact('post'));
}

public function update(Request $request, Post $post)
{
// Handle post update
$post->update($request->validated());
return redirect('/blog/' . $post->slug);
}

public function destroy(Post $post)
{
// Handle post deletion
$post->delete();
return redirect('/blog');
}
}
