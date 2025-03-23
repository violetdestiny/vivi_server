<!-- resources/views/reviews/index.blade.php -->

@extends('layouts.app')

@section('title', 'Product Reviews')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Product Reviews</h1>
    <p class="mb-6">Read reviews of pet products from our community.</p>

    <!-- List of Product Reviews -->
    <div class="mt-6">
        @foreach ($reviews as $review)
            <div class="bg-white p-4 rounded-lg shadow mb-4">
                <h2 class="text-xl font-semibold">{{ $review->product_name }}</h2>
                <p class="text-gray-700">{{ $review->rating }}</p>
                <p class="text-gray-700">{{ $review->comment }}</p>
                <a href="{{ route('reviews.show', $review->id) }}" class="text-blue-500 hover:underline">Read More</a>
            </div>
        @endforeach
    </div>
@endsection
