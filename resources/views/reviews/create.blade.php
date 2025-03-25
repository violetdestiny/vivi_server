@extends('layouts.app')

@section('title', 'Create New Review')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6">Create New Review</h1>

            <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 mb-2">Review Title</label>
                    <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg" required>
                </div>

                <div class="mb-4">
                    <label for="type" class="block text-gray-700 mb-2">Review Type</label>
                    <select name="type" id="type" class="w-full px-3 py-2 border rounded-lg" required>
                        <option value="">Select a type</option>
                        <option value="product">Cat Product</option>
                        <option value="cafe">Cat Cafe</option>
                        <option value="service">Cat Service</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="rating" class="block text-gray-700 mb-2">Rating</label>
                    <select name="rating" id="rating" class="w-full px-3 py-2 border rounded-lg" required>
                        <option value="">Select rating</option>
                        @for($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }} {{ $i === 1 ? 'star' : 'stars' }}</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-gray-700 mb-2">Review Content</label>
                    <textarea name="content" id="content" rows="6" class="w-full px-3 py-2 border rounded-lg" required></textarea>
                </div>

                <div class="mb-6">
                    <label for="image" class="block text-gray-700 mb-2">Upload Image (optional)</label>
                    <input type="file" name="image" id="image" class="w-full px-3 py-2 border rounded-lg">
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('reviews.index') }}" class="text-gray-600 hover:underline">Cancel</a>
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                        Submit Review
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
