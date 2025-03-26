<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductReview;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    public function index(Request $request)
    {
        // Temporary sample data - remove this when you have real reviews
        $reviews = collect([
            (object)[
                'id' => 1,
                'user' => (object)['name' => 'CatLover42'],
                'title' => 'Premium Scratching Post',
                'type' => 'product',
                'rating' => 5,
                'content' => 'This scratching post has saved my furniture! Sturdy construction and my cats love it.',
                'created_at' => now()->subDays(2),
                'image_path' => null
            ],
            (object)[
                'id' => 2,
                'user' => (object)['name' => 'WhiskerWatcher'],
                'title' => 'Paws & Relax Cafe',
                'type' => 'cafe',
                'rating' => 4,
                'content' => 'Lovely atmosphere with 15 resident cats. The caramel latte was amazing too!',
                'created_at' => now()->subDays(5),
                'image_path' => null
            ],
            (object)[
                'id' => 3,
                'user' => (object)['name' => 'PurrfectParent'],
                'title' => 'Automatic Litter Box',
                'type' => 'product',
                'rating' => 3,
                'content' => 'Works well but quite loud. My cat was scared of it at first but now uses it regularly.',
                'created_at' => now()->subWeek(),
                'image_path' => null
            ]
        ]);

        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to login to add a review.');
        }

        return view('reviews.create');
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:product,cafe,service,other',
            'rating' => 'required|integer|between:1,5',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('review_images', 'public');
        }

        ProductReview::create([
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'type' => $validated['type'],
            'rating' => $validated['rating'],
            'content' => $validated['content'],
            'image_path' => $imagePath
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review added successfully!');
    }


    public function show(ProductReview $review)
    {
        return view('reviews.show', [
            'review' => $review,
            'relatedReviews' => ProductReview::where('type', $review->type)
                ->where('id', '!=', $review->id)
                ->take(3)
                ->get()
        ]);
    }
}
