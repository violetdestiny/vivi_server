@extends('layouts.app')

@section('content')
    <style>
        .animate-dropdown {
            animation: dropdown 3s ease-out;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        @keyframes dropdown {
            from {
                transform: translateY(-100px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .cat-card:hover .cat-info {
            opacity: 1;
            transform: translateY(0);
        }

        .cat-info {
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
        }
    </style>

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl font-bold text-gray-800">
                Purr-fect Cat Chronicles
            </h1>
        </div>
    </div>

    <!-- Cat Facts Section -->
    <div class="sm:grid grid-cols-3 gap-12 w-4/5 mx-auto py-20">
        <div class="cat-card bg-white rounded-xl shadow-lg overflow-hidden relative">
            <img src="https://cdn.pixabay.com/photo/2017/02/20/18/03/cat-2083492_1280.jpg"
                 class="w-full h-64 object-cover animate-dropdown"
                 alt="Cat Facts">
            <div class="cat-info absolute inset-0 bg-orange-100 bg-opacity-90 p-6">
                <h3 class="text-2xl font-bold mb-4">Cat Facts 101</h3>
                <ul class="list-disc text-left space-y-2">
                    <li>Cats have 230 bones (humans have 206)</li>
                    <li>They spend 70% of their lives sleeping</li>
                    <li>Cat's nose print is unique</li>
                </ul>
            </div>
        </div>

        <div class="cat-card bg-white rounded-xl shadow-lg overflow-hidden relative">
            <img src="https://cdn.pixabay.com/photo/2017/07/25/01/22/cat-2536662_1280.jpg"
                 class="w-full h-64 object-cover animate-dropdown"
                 alt="Cat Care"
                 style="animation-delay: 0.2s">
            <div class="cat-info absolute inset-0 bg-orange-100 bg-opacity-90 p-6">
                <h3 class="text-2xl font-bold mb-4">Care Tips</h3>
                <ul class="list-disc text-left space-y-2">
                    <li>Brush regularly</li>
                    <li>Keep litter box clean</li>
                    <li>Annual vet checkups</li>
                </ul>
            </div>
        </div>

        <div class="cat-card bg-white rounded-xl shadow-lg overflow-hidden relative">
            <img src="https://cdn.pixabay.com/photo/2014/04/13/20/49/cat-323262_1280.jpg"
                 class="w-full h-64 object-cover animate-dropdown"
                 alt="Cat Behavior"
                 style="animation-delay: 0.4s">
            <div class="cat-info absolute inset-0 bg-orange-100 bg-opacity-90 p-6">
                <h3 class="text-2xl font-bold mb-4">Behavior Guide</h3>
                <ul class="list-disc text-left space-y-2">
                    <li>Understanding purring</li>
                    <li>Kneading meaning</li>
                    <li>Tail positions</li>
                </ul>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create"
               class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-3 px-8 rounded-full transition duration-300">
                Create New Post
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div class="animate-dropdown">
                <img src="{{ asset('images/' . $post->image_path) }}"
                     alt="{{ $post->title }}"
                     class="rounded-xl shadow-lg hover:scale-105 transition duration-300">
            </div>

            <div>
                <h2 class="text-gray-800 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>

                <div class="flex items-center mb-6">
            <span class="text-gray-500 text-sm">
                By <span class="font-semibold text-orange-500">{{ $post->user->name }}</span>,
                {{ $post->updated_at->format('M d, Y') }}
            </span>
                </div>

                <p class="text-xl text-gray-600 leading-relaxed mb-8">
                    {{ $post->description }}
                </p>

                <div class="flex items-center space-x-4">
                    <a href="/blog/{{ $post->slug }}"
                       class="bg-gray-800 hover:bg-gray-900 text-white px-6 py-3 rounded-full font-semibold transition duration-300">
                        Read Full Story
                    </a>

                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <div class="flex space-x-4">
                            <a href="/blog/{{ $post->slug }}/edit"
                               class="text-gray-600 hover:text-orange-500 transition duration-300">
                                Edit
                            </a>
                            <form action="/blog/{{ $post->slug }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="text-red-500 hover:text-red-700 transition duration-300" type="submit">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach

@endsection
