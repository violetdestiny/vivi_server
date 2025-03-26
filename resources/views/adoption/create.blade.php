@extends('layouts.app')

@section('content')
    <div class="w-4/5 mx-auto py-10">
        <div class="text-center mb-12 relative">
            <img src="{{ asset('images/miffy/miffy-character.png') }}" class="absolute -left-20 top-0 w-24 opacity-20 miffy-float">
            <h1 class="text-4xl font-bold text-miffy-brown mb-4">Create New Blog Post</h1>
            <p class="text-miffy-brown">Share your cat stories and tips with our community</p>
            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="absolute -right-20 bottom-0 w-24 opacity-20 miffy-float" style="animation-delay: 0.5s">
        </div>

        <div class="miffy-card bg-white p-8 rounded-xl border-2 border-miffy-brown">
            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Title Field -->
                <div class="mb-6">
                    <label for="title" class="block text-lg font-medium text-miffy-brown mb-2">
                        Post Title
                    </label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        placeholder="My Amazing Cat Story..."
                        class="w-full px-6 py-4 text-xl border-2 border-miffy-brown rounded-xl focus:outline-none focus:ring-2 focus:ring-miffy-pink bg-white"
                        value="{{ old('title') }}"
                        required>
                    @error('title')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category Field -->
                <div class="mb-6">
                    <label for="category" class="block text-lg font-medium text-miffy-brown mb-2">
                        Category
                    </label>
                    <select
                        name="category"
                        id="category"
                        class="w-full px-6 py-4 text-lg border-2 border-miffy-brown rounded-xl focus:outline-none focus:ring-2 focus:ring-miffy-pink bg-white">
                        <option value="">Select a category</option>
                        <option value="Kitten Care" {{ old('category') == 'Kitten Care' ? 'selected' : '' }}>Kitten Care</option>
                        <option value="Behavior" {{ old('category') == 'Behavior' ? 'selected' : '' }}>Behavior</option>
                        <option value="DIY Projects" {{ old('category') == 'DIY Projects' ? 'selected' : '' }}>DIY Projects</option>
                        <option value="Senior Care" {{ old('category') == 'Senior Care' ? 'selected' : '' }}>Senior Care</option>
                        <option value="Nutrition" {{ old('category') == 'Nutrition' ? 'selected' : '' }}>Nutrition</option>
                        <option value="Rescue Stories" {{ old('category') == 'Rescue Stories' ? 'selected' : '' }}>Rescue Stories</option>
                    </select>
                    @error('category')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Content Field -->
                <div class="mb-6">
                    <label for="description" class="block text-lg font-medium text-miffy-brown mb-2">
                        Post Content
                    </label>
                    <textarea
                        name="description"
                        id="description"
                        rows="8"
                        class="w-full px-6 py-4 text-lg border-2 border-miffy-brown rounded-xl focus:outline-none focus:ring-2 focus:ring-miffy-pink bg-white"
                        placeholder="Share your story here..."
                        required>{{ old('description') }}</textarea>
                    @error('description')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image Upload -->
                <div class="mb-8">
                    <label class="block text-lg font-medium text-miffy-brown mb-2">
                        Featured Image
                    </label>
                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col items-center justify-center w-full h-48 border-2 border-miffy-brown border-dashed rounded-xl cursor-pointer bg-white hover:bg-miffy-peach/20 transition">
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
                                id="image"
                                class="hidden"
                                accept="image/*">
                        </label>
                    </div>
                    @error('image')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="miffy-button px-10 py-4 text-xl font-bold">
                        Publish Post
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .miffy-card {
            box-shadow: 8px 8px 0 var(--miffy-brown);
            border: 2px solid var(--miffy-brown);
            border-radius: 1rem;
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
