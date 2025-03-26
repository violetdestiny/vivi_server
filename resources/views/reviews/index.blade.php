@extends('layouts.app')

@section('title', 'Cat Product Reviews')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4 text-gray-800">Cat Community Reviews</h1>
        <p class="mb-6 text-gray-700">Read reviews about cat products, cafes, services, and our website from our community.</p>

        @auth
            <a href="{{ route('reviews.create') }}"
               class="mb-6 inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded transition duration-300">
                Add Your Review
            </a>
        @else
            <p class="mb-6 text-gray-700">
                <a href="{{ route('login') }}" class="text-orange-500 hover:underline">Login</a> to add your own review
            </p>
        @endauth

        <!-- Review Filters -->
        <div class="mb-6 flex flex-wrap gap-2">
            <a href="{{ route('reviews.index') }}"
               class="px-3 py-1 rounded-full text-sm font-medium {{ !request('type') ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                All Reviews
            </a>
            <a href="{{ route('reviews.index', ['type' => 'product']) }}"
               class="px-3 py-1 rounded-full text-sm font-medium {{ request('type') === 'product' ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                Products
            </a>
            <a href="{{ route('reviews.index', ['type' => 'cafe']) }}"
               class="px-3 py-1 rounded-full text-sm font-medium {{ request('type') === 'cafe' ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                Cafes
            </a>
            <a href="{{ route('reviews.index', ['type' => 'service']) }}"
               class="px-3 py-1 rounded-full text-sm font-medium {{ request('type') === 'service' ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                Services
            </a>
            <a href="{{ route('reviews.index', ['type' => 'website']) }}"
               class="px-3 py-1 rounded-full text-sm font-medium {{ request('type') === 'website' ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                Website
            </a>
        </div>

        <!-- List of Reviews -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                // Base hardcoded reviews
                $hardcodedReviews = [
                    [
                        'id' => 1,
                        'user' => ['name' => 'CatLover42'],
                        'title' => 'Premium Scratching Post',
                        'review_type' => 'product',
                        'rating' => 5,
                        'content' => 'This scratching post has saved my furniture! Sturdy construction and my cats love it.',
                        'created_at' => now()->subDays(2),
                        'image_path' => null
                    ],
                    [
                        'id' => 2,
                        'user' => ['name' => 'WhiskerWatcher'],
                        'title' => 'Paws & Relax Cafe',
                        'review_type' => 'cafe',
                        'rating' => 4,
                        'content' => 'Lovely atmosphere with 15 resident cats. The caramel latte was amazing too!',
                        'created_at' => now()->subDays(5),
                        'image_path' => null
                    ],
                    [
                        'id' => 3,
                        'user' => ['name' => 'PurrfectParent'],
                        'title' => 'Automatic Litter Box',
                        'review_type' => 'product',
                        'rating' => 3,
                        'content' => 'Works well but quite loud. My cat was scared of it at first but now uses it regularly.',
                        'created_at' => now()->subWeek(),
                        'image_path' => null
                    ],
                    [
                        'id' => 4,
                        'user' => ['name' => 'HappyCustomer'],
                        'title' => 'Great Adoption Experience',
                        'review_type' => 'website',
                        'rating' => 5,
                        'content' => 'The adoption process was so smooth thanks to this website. Found my perfect feline companion!',
                        'created_at' => now()->subDays(3),
                        'image_path' => null
                    ]
                ];

                // Check for newly added review in session
                $newReview = session('new_review');
                $reviews = $newReview ? array_merge([$newReview], $hardcodedReviews) : $hardcodedReviews;
            @endphp

            @forelse ($reviews as $review)
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 border border-gray-100">
                    <div class="flex justify-between items-start mb-2">
                        <span class="px-2 py-1 rounded-full text-xs font-semibold
                            {{ $review['review_type'] === 'product' ? 'bg-blue-100 text-blue-800' : '' }}
                            {{ $review['review_type'] === 'cafe' ? 'bg-purple-100 text-purple-800' : '' }}
                            {{ $review['review_type'] === 'service' ? 'bg-green-100 text-green-800' : '' }}
                            {{ $review['review_type'] === 'website' ? 'bg-orange-100 text-orange-800' : '' }}">
                            @if($review['review_type'] === 'website')
                                Website
                            @else
                                {{ ucfirst($review['review_type']) }}
                            @endif
                        </span>
                        <div class="flex items-center">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $review['rating'])
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

                    <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $review['title'] }}</h2>

                    @if($review['image_path'])
                        <img src="{{ asset('storage/' . $review['image_path']) }}" alt="{{ $review['title'] }}" class="w-full h-48 object-cover mb-3 rounded">
                    @endif

                    <p class="text-gray-700 mb-4">{{ Str::limit($review['content'], 100) }}</p>

                    <div class="flex justify-between items-center text-sm text-gray-600">
                        <span>By {{ $review['user']['name'] }}</span>
                        <span>{{ \Carbon\Carbon::parse($review['created_at'])->diffForHumans() }}</span>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12">
                    <p class="text-gray-600 text-lg">
                        @if(request('type'))
                            No {{ request('type') }} reviews yet.
                        @else
                            No reviews yet.
                        @endif
                        Be the first to add one!
                    </p>
                    @auth
                        <a href="{{ route('reviews.create') }}?type={{ request('type') }}"
                           class="mt-4 inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-6 rounded transition duration-300">
                            Add Review
                        </a>
                    @endif
                </div>
            @endforelse
        </div>
    </div>
@endsection
