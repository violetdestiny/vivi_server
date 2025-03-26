<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductReview;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    public function index(Request $request)
    {
        $reviews = ProductReview::with('user')
            ->latest()
            ->paginate(9);

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
            'review_type' => 'required|in:product,cafe,service,website',
            'rating' => 'required|integer|between:1,5',
            'content' => 'required|string|min:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('review_images', 'public');
        }

        $newReview = [
            'id' => rand(100, 999), // Temporary ID for display
            'user' => ['name' => Auth::user()->name],
            'title' => $validated['title'],
            'review_type' => $validated['review_type'],
            'rating' => $validated['rating'],
            'content' => $validated['content'],
            'image_path' => $imagePath,
            'created_at' => now()
        ];

        return redirect()
            ->route('reviews.index')
            ->with('new_review', $newReview)
            ->with('success', 'Review added successfully!');
    }
    public function show(ProductReview $review)
    {
        $relatedReviews = ProductReview::where('review_type', $review->review_type)
            ->where('id', '!=', $review->id)
            ->with('user')
            ->latest()
            ->take(3)
            ->get();

        return view('reviews.show', [
            'review' => $review,
            'relatedReviews' => $relatedReviews
        ]);
    }
}
