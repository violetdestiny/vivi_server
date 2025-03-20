@extends('layouts.app')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <!-- New Navigation -->
    <nav class="bg-orange-100 shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex space-x-4">
                    <!-- Logo -->
                    <a href="/" class="flex items-center">
                        <span class="text-2xl font-bold text-gray-800">🐾 Purrfect Posts</span>
                    </a>

                    <!-- Primary Nav -->
                    <div class="hidden md:flex items-center space-x-6 ml-10">
                        <a href="/" class="nav-link hover:text-orange-600">Home</a>
                        <a href="{{ route('blog.index') }}" class="nav-link hover:text-orange-600">Blog</a>
                        <a href="/adoption" class="nav-link hover:text-orange-600">Adoption</a>
                        <a href="/care-guides" class="nav-link hover:text-orange-600">Care Guides</a>
                        <a href="/diy-toys" class="nav-link hover:text-orange-600">DIY Toys</a>
                        <a href="/reviews" class="nav-link hover:text-orange-600">Reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <style>
        .animate-enter {
            animation: enter 1s ease-out;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        @keyframes enter {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .blog-card:hover .blog-image {
            transform: scale(1.05);
        }

        .category-badge {
            transition: all 0.3s ease;
        }

        /* New Nav Styles */
        .nav-link {
            @apply text-gray-700 px-3 py-2 rounded-md text-lg font-medium transition-colors;
        }

        .mobile-menu {
            @apply md:hidden absolute top-0 inset-x-0 p-2 transition transform origin-top-right;
        }
    </style>

    <div class="w-4/5 mx-auto">
        <!-- Hero Section -->
        <div class="text-center py-20">
            <h1 class="text-6xl font-bold text-gray-800 mb-6 animate-enter">
                The Purr-fect Cat Blog
            </h1>
            <p class="text-xl text-gray-600 mb-8 animate-enter" style="animation-delay: 0.2s">
                Discover amazing stories about our feline friends
            </p>
        </div>

        <!-- Featured Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            @forelse($featuredPosts as $post)
                <div class="blog-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                    <a href="/blog/{{ $post->slug }}" class="block">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ asset('images/' . $post->image_path) }}"
                                 alt="{{ $post->title }}"
                                 class="blog-image w-full h-full object-cover transition duration-500">
                        </div>
                        <div class="p-6">
                            <div class="category-badge bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm inline-block mb-4">
                                {{ $post->category ?? 'Cat Life' }}
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($post->description, 80) }}</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500">
                    No featured posts found
                </div>
            @endforelse
        </div>

        <!-- Cat Care Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-orange-50 rounded-xl p-12 mb-20 animate-enter">
            <div class="flex flex-col justify-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Essential Cat Care Tips</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-orange-100 p-3 rounded-lg mr-4">
                            🐾
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Nutrition Guide</h3>
                            <p class="text-gray-600">Learn about balanced diets and feeding schedules for cats of all ages.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-100 p-3 rounded-lg mr-4">
                            🏥
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Health Checkups</h3>
                            <p class="text-gray-600">Understand the importance of regular veterinary visits.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden">
                <img src="https://cdn.pixabay.com/photo/2018/05/07/10/49/husky-3380550_1280.jpg"
                     alt="Cat Care"
                     class="w-full h-96 object-cover rounded-xl">
            </div>
        </div>

        <!-- All Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            @forelse($posts as $post)
                <div class="blog-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                    <a href="/blog/{{ $post->slug }}" class="block">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ asset('images/' . $post->image_path) }}"
                                 alt="{{ $post->title }}"
                                 class="blog-image w-full h-full object-cover transition duration-500">
                        </div>
                        <div class="p-6">
                            <div class="category-badge bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm inline-block mb-4">
                                {{ $post->category ?? 'Cat Life' }}
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($post->description, 80) }}</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500">
                    No posts found. Check back later!
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
{{--        @if($posts->hasPages())--}}
{{--            <div class="mb-20">--}}
{{--                {{ $posts->links() }}--}}
{{--            </div>--}}
{{--        @endif--}}
    </div>
@endsection
