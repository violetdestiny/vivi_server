@extends('layouts.app')

@section('content')
    <div class="w-4/5 mx-auto">
        <!-- Create Post Header -->
        <div class="py-10 text-center relative">
            <div class="absolute -left-20 top-0 opacity-20 miffy-float">
                <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-32">
            </div>
            <h1 class="text-5xl font-bold text-miffy-brown mb-4">
                Share Your Cat Story
            </h1>
            <p class="text-xl text-miffy-brown">
                Add your purr-fect post to our feline community
            </p>
            <div class="absolute -right-20 bottom-0 opacity-20 miffy-float" style="animation-delay: 0.3s">
                <img src="{{ asset('images/miffy/miffy-cat1.png') }}" class="w-32">
            </div>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="w-full mb-8 p-6 bg-miffy-pink text-white rounded-xl border-2 border-miffy-brown">
                <h3 class="font-bold text-lg mb-2">Oops! Please fix these issues:</h3>
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Create Post Form -->
        <div class="miffy-card p-8 mb-20">
            <form
                action="/blog"
                method="POST"
                enctype="multipart/form-data"
                class="space-y-8">
                @csrf

                <!-- Title Field -->
                <div>
                    <label for="title" class="block text-lg font-medium text-miffy-brown mb-2">
                        Post Title
                    </label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        placeholder="My Amazing Cat Story..."
                        class="w-full px-6 py-4 text-xl border-2 border-miffy-brown rounded-xl focus:outline-none focus:ring-2 focus:ring-miffy-pink bg-white">
                </div>

                <!-- Description Field -->
                <div>
                    <label for="description" class="block text-lg font-medium text-miffy-brown mb-2">
                        Post Content
                    </label>
                    <textarea
                        name="description"
                        id="description"
                        placeholder="Share your story here..."
                        rows="8"
                        class="w-full px-6 py-4 text-lg border-2 border-miffy-brown rounded-xl focus:outline-none focus:ring-2 focus:ring-miffy-pink bg-white"></textarea>
                </div>

                <!-- Category Field -->
                <div>
                    <label for="category" class="block text-lg font-medium text-miffy-brown mb-2">
                        Category
                    </label>
                    <select
                        name="category"
                        id="category"
                        class="w-full px-6 py-4 text-lg border-2 border-miffy-brown rounded-xl focus:outline-none focus:ring-2 focus:ring-miffy-pink bg-white">
                        <option value="">Select a category</option>
                        <option value="Kitten Care">Kitten Care</option>
                        <option value="Behavior">Behavior</option>
                        <option value="DIY Projects">DIY Projects</option>
                        <option value="Senior Care">Senior Care</option>
                        <option value="Nutrition">Nutrition</option>
                        <option value="Rescue Stories">Rescue Stories</option>
                    </select>
                </div>

                <!-- Image Upload -->
                <div>
                    <label class="block text-lg font-medium text-miffy-brown mb-2">
                        Featured Image
                    </label>
                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col items-center justify-center w-full h-64 border-2 border-miffy-brown border-dashed rounded-xl cursor-pointer bg-white hover:bg-miffy-peach/20 transition">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-12 h-12 mb-3">
                                <p class="mb-2 text-lg text-miffy-brown">
                                    <span class="font-semibold">Click to upload</span> or drag and drop
                                </p>
                                <p class="text-sm text-gray-500">
                                    PNG, JPG or JPEG (Max 2MB)
                                </p>
                            </div>
                            <input
                                type="file"
                                name="image"
                                class="hidden"
                                accept="image/*">
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center pt-8">
                    <button
                        type="submit"
                        class="miffy-button px-10 py-4 text-xl font-bold">
                        Publish Post
                    </button>
                </div>
            </form>
        </div>

        <!-- Form Tips Section -->
        <div class="bg-miffy-peach rounded-xl p-8 mb-10 border-2 border-miffy-brown">
            <h2 class="text-2xl font-bold text-miffy-brown mb-6 text-center">
                Writing Tips for Cat Lovers
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg border-2 border-miffy-brown">
                    <div class="text-miffy-pink text-3xl mb-3">1</div>
                    <h3 class="text-lg font-bold text-miffy-brown mb-2">Be Purr-sonal</h3>
                    <p class="text-gray-600">Share your unique experiences and what makes your cat special.</p>
                </div>
                <div class="bg-white p-6 rounded-lg border-2 border-miffy-brown">
                    <div class="text-miffy-pink text-3xl mb-3">2</div>
                    <h3 class="text-lg font-bold text-miffy-brown mb-2">Add Details</h3>
                    <p class="text-gray-600">Describe behaviors, quirks, or special moments that cat lovers will appreciate.</p>
                </div>
                <div class="bg-white p-6 rounded-lg border-2 border-miffy-brown">
                    <div class="text-miffy-pink text-3xl mb-3">3</div>
                    <h3 class="text-lg font-bold text-miffy-brown mb-2">Include Photos</h3>
                    <p class="text-gray-600">A great picture helps tell your story and makes your post more engaging.</p>
                </div>
            </div>
        </div>
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
