@extends('layouts.app')

@section('title', $review->title)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <!-- Back button -->
            <a href="{{ route('reviews.index') }}" class="inline-flex items-center text-orange-500 hover:text-orange-600 mb-6">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Reviews
            </a>

            <!-- Review Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-between items-start mb-4">
                <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm font-semibold">
                    {{ ucfirst($review->type) }}
                </span>
                    <div class="flex items-center">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $review->rating)
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @else
                                <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endif
                        @endfor
                    </div>
                </div>

                <h1 class="text-2xl font-bold mb-4">{{ $review->title }}</h1>

                @if($review->image_path)
                    <img src="{{ asset('storage/' . $review->image_path) }}" alt="{{ $review->title }}" class="w-full h-64 object-cover rounded-lg mb-6">
                @endif

                <div class="prose max-w-none mb-8">
                    {!! nl2br(e($review->content)) !!}
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                {{ $review->user->name }}
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="{{ $review->created_at->toDateTimeString() }}">
                                    {{ $review->created_at->diffForHumans() }}
                                </time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Reviews -->
            @if($relatedReviews->count() > 0)
                <div class="mt-12">
                    <h2 class="text-xl font-bold mb-6">More {{ ucfirst($review->type) }} Reviews</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($relatedReviews as $related)
                            <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                                <h3 class="font-semibold mb-2">{{ $related->title }}</h3>
                                <div class="flex items-center mb-2">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $related->rating)
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
                                <p class="text-sm text-gray-600 mb-3">{{ Str::limit($related->content, 80) }}</p>
                                <a href="{{ route('reviews.show', $related->id) }}" class="text-sm text-orange-500 hover:underline">Read more</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
