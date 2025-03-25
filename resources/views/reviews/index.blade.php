@extends('layouts.app')

@section('title', 'Cat Product Reviews')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Cat Product Reviews</h1>
        <p class="mb-6">Read reviews about cat products, cafes, and services from our community.</p>

        @auth
            <a href="{{ route('reviews.create') }}"
               class="mb-6 inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded transition duration-300">
                Add Your Review
            </a>
        @else
            <p class="mb-6 text-gray-600">
                <a href="{{ route('login') }}" class="text-orange-500 hover:underline">Login</a> to add your own review
            </p>
        @endauth

        <!-- List of Reviews -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($reviews as $review)
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex justify-between items-start mb-2">
                    <span class="px-2 py-1 bg-orange-100 text-orange-800 rounded-full text-xs font-semibold">
                        {{ ucfirst($review->type) }}
                    </span>
                        <div class="flex items-center">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $review->rating)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @else
                                    <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endif
                            @endfor
                        </div>
                    </div>

                    <h2 class="text-xl font-semibold mb-2">{{ $review->title }}</h2>

                    @if($review->image_path)
                        <img src="{{ asset('storage/' . $review->image_path) }}" alt="{{ $review->title }}" class="w-full h-48 object-cover mb-3 rounded">
                    @endif

                    <p class="text-gray-700 mb-4">{{ Str::limit($review->content, 100) }}</p>

                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <span>By {{ $review->user->name }}</span>
                        <span>{{ $review->created_at->diffForHumans() }}</span>
                    </div>

                    <a href="{{ route('reviews.show', $review->id) }}"
                       class="mt-3 inline-block text-orange-500 hover:underline font-medium">
                        Read Full Review
                    </a>
                </div>
            @empty
                <div class="col-span-3 text-center py-12">
                    <p class="text-gray-500 text-lg">No reviews yet. Be the first to add one!</p>
                    @auth
                        <a href="{{ route('reviews.create') }}"
                           class="mt-4 inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-6 rounded transition duration-300">
                            Add Review
                        </a>
                    @endif
                </div>
            @endforelse
        </div>
    </div>
@endsection
