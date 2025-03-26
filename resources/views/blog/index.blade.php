@extends('layouts.app')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <div class="w-4/5 mx-auto">
        <!-- Hero Section with Miffy-themed Cat -->
        <div class="text-center py-20 relative">
            <div class="absolute -left-20 top-10 opacity-20 miffy-float">
                <img src="{{ asset('images/miffy/miffy-cat2.png') }}" class="w-32">
            </div>
            <h1 class="text-6xl font-bold text-miffy-brown mb-6 animate-enter">
                The Purr-fect Cat Blog
            </h1>
            <p class="text-xl text-miffy-brown mb-8 animate-enter" style="animation-delay: 0.2s">
                Discover amazing stories about our feline friends
            </p>
            <div class="absolute -right-20 bottom-10 opacity-20 miffy-float" style="animation-delay: 0.5s">
                <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-32">
            </div>
        </div>

        <!-- Featured Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            @forelse($featuredPosts as $post)
                <div class="miffy-card overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                    <a href="/blog/{{ $post->slug }}" class="block">
                        <div class="relative h-64 overflow-hidden">
                            @if($post->image_path)
                                <img src="{{ asset('images/' . $post->image_path) }}"
                                     alt="{{ $post->title }}"
                                     class="w-full h-full object-cover transition duration-500">
                            @else
                                <!-- Default Miffy-themed cat image -->
                                <img src="{{ asset('images/miffy/miffy-cat1.png') }}"
                                     class="w-full h-full object-contain p-6 bg-miffy-peach">
                            @endif
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                        </div>
                        <div class="p-6">
                            <div class="category-badge bg-miffy-pink text-white px-3 py-1 rounded-full text-sm inline-block mb-4">
                                {{ $post->category ?? 'Cat Life' }}
                            </div>
                            <h3 class="text-xl font-bold text-miffy-brown mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($post->description, 80) }}</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-5 h-5 mr-2">
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500 miffy-card p-8">
                    <img src="{{ asset('images/miffy/miffy-cat2.png') }}" class="w-32 mx-auto mb-4">
                    <p class="text-lg">No featured posts found</p>
                    <p class="text-sm text-miffy-pink">Check back later for cute cat stories!</p>
                </div>
            @endforelse
        </div>

        <!-- Cat Care Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-miffy-peach rounded-xl p-12 mb-20 animate-enter border-2 border-miffy-brown">
            <div class="flex flex-col justify-center">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-4xl font-bold text-miffy-brown">Essential Cat Care Tips</h2>
                    <a href="/care-guides" class="miffy-button px-4 py-2 text-sm">
                        View All Guides
                    </a>
                </div>
                <div class="space-y-6">
                    <div class="flex items-start bg-white p-4 rounded-lg">
                        <div class="bg-miffy-pink text-white p-3 rounded-lg mr-4">
                            <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-miffy-brown">Nutrition Guide</h3>
                            <p class="text-gray-600">Learn about balanced diets and feeding schedules for cats of all ages.</p>
                            <a href="/care-guides#nutrition" class="text-miffy-pink hover:underline mt-2 inline-block">
                                Read more →
                            </a>
                        </div>
                    </div>
                    <div class="flex items-start bg-white p-4 rounded-lg">
                        <div class="bg-miffy-pink text-white p-3 rounded-lg mr-4">
                            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-miffy-brown">Health Checkups</h3>
                            <p class="text-gray-600">Understand the importance of regular veterinary visits.</p>
                            <a href="/care-guides#health" class="text-miffy-pink hover:underline mt-2 inline-block">
                                Read more →
                            </a>
                        </div>
                    </div>
                    <div class="flex items-start bg-white p-4 rounded-lg">
                        <div class="bg-miffy-pink text-white p-3 rounded-lg mr-4">
                            <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-miffy-brown">Playtime Ideas</h3>
                            <p class="text-gray-600">Discover fun activities to keep your cat entertained.</p>
                            <a href="/care-guides#playtime" class="text-miffy-pink hover:underline mt-2 inline-block">
                                Read more →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden border-2 border-miffy-brown">
                <img src="{{ asset('images/miffy/miffy-cat1.png') }}"
                     alt="Miffy with cats"
                     class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Rest of your content remains the same -->
        <!-- All Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            @forelse($posts as $post)
                <div class="miffy-card overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                    <a href="/blog/{{ $post->slug }}" class="block">
                        <div class="relative h-64 overflow-hidden">
                            @if($post->image_path)
                                <img src="{{ asset('images/' . $post->image_path) }}"
                                     alt="{{ $post->title }}"
                                     class="w-full h-full object-cover transition duration-500">
                            @else
                                <!-- Default Miffy-themed cat image -->
                                <div class="w-full h-full bg-miffy-peach flex items-center justify-center">
                                    <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-32">
                                </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <div class="category-badge bg-miffy-pink text-white px-3 py-1 rounded-full text-sm inline-block mb-4">
                                {{ $post->category ?? 'Cat Tales' }}
                            </div>
                            <h3 class="text-xl font-bold text-miffy-brown mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($post->description, 80) }}</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-4 h-4 mr-1">
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center miffy-card p-8">
                    <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-40 mx-auto mb-6">
                    <h3 class="text-2xl font-bold text-miffy-brown mb-2">No posts yet!</h3>
                    <p class="text-gray-600 mb-4">Be the first to share your cat story</p>
                    <a href="{{ route('blog.create') }}" class="miffy-button inline-block px-6 py-2">
                        Write Post
                    </a>
                </div>
            @endforelse
        </div>

        <!-- Newsletter Section -->
        <div class="bg-miffy-peach rounded-xl p-8 mb-20 text-center border-2 border-miffy-brown">
            <div class="max-w-2xl mx-auto">
                <img src="{{ asset('images/miffy/miffy-cat2.png') }}" class="w-20 mx-auto mb-4">
                <h2 class="text-3xl font-bold text-miffy-brown mb-2">Join Our Cat Community</h2>
                <p class="text-gray-600 mb-6">Get weekly updates with cute cat stories and care tips</p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Your email" class="px-4 py-2 rounded-full border-2 border-miffy-brown focus:outline-none focus:ring-2 focus:ring-miffy-pink">
                    <button type="submit" class="miffy-button px-6 py-2 rounded-full">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>

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

        .category-badge {
            transition: all 0.3s ease;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .miffy-float {
            animation: float 4s ease-in-out infinite;
        }
    </style>
@endsection
