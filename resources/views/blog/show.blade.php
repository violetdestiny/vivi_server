@extends('layouts.app')

@section('content')
    <div class="w-4/5 mx-auto">
        @if(!$post)
            <div class="bg-miffy-pink text-white p-8 rounded-xl border-2 border-miffy-brown mb-10 text-center">
                <h1 class="text-4xl font-bold mb-4">Oops!</h1>
                <p class="text-xl mb-6">The post you're looking for doesn't exist.</p>
                <a href="/blog" class="miffy-button px-6 py-3 text-lg inline-block">
                    Back to Blog
                </a>
            </div>
        @else
            <!-- Post Header -->
            <div class="text-center py-10 relative">
                <div class="absolute -left-20 top-0 opacity-20 miffy-float">
                    <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-32">
                </div>
                <h1 class="text-5xl font-bold text-miffy-brown mb-6">
                    {{ $post->title }}
                </h1>
                <div class="absolute -right-20 bottom-0 opacity-20 miffy-float" style="animation-delay: 0.3s">
                    <img src="{{ asset('images/miffy/miffy-cat1.png') }}" class="w-32">
                </div>
            </div>

            <!-- Post Content -->
            <div class="miffy-card p-12 mb-20">
                <div class="flex items-center text-gray-500 mb-8">
                    <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-8 h-8 mr-2">
                    <span class="font-bold italic text-miffy-brown">{{ $post->user->name }}</span>
                    <span class="mx-2">•</span>
                    <span>{{ date('jS M Y', strtotime($post->updated_at)) }}</span>
                    <span class="mx-2">•</span>
                    <span class="category-badge bg-miffy-pink text-white px-3 py-1 rounded-full text-sm">
                    {{ $post->category ?? 'General' }}
                </span>
                </div>

                @if($post->image_path)
                    <div class="mb-10 rounded-xl overflow-hidden border-2 border-miffy-brown">
                        <img
                            src="{{ asset('images/' . $post->image_path) }}"
                            alt="{{ $post->title }}"
                            class="w-full h-auto">
                    </div>
                @endif

                <div class="prose max-w-none text-lg text-gray-700">
                    {!! nl2br(e($post->description)) !!}
                </div>
            </div>

            <!-- Back Button -->
            <div class="text-center mb-20">
                <a href="/blog" class="miffy-button px-8 py-3 text-lg">
                    ← Back to All Posts
                </a>
            </div>
        @endif
    </div>

    <style>
        .miffy-card {
            box-shadow: 8px 8px 0 var(--miffy-brown);
            border: 2px solid var(--miffy-brown);
            border-radius: 1rem;
            background-color: white;
        }

        .miffy-button {
            background-color: var(--miffy-pink);
            color: white;
            border-radius: 9999px;
            transition: all 0.3s ease;
            border: 2px solid var(--miffy-brown);
        }

        .miffy-button:hover {
            background-color: var(--miffy-brown);
            transform: scale(1.05);
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
