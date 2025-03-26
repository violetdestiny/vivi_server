@extends('layouts.app')

@section('title', 'Add Review')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-6">Add Your Review</h1>

            <form method="POST" action="{{ route('reviews.store') }}" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
                @csrf

                <div class="mb-4">
                    <label for="review_type" class="block text-gray-700 mb-2">What are you reviewing? *</label>
                    <select name="review_type" id="review_type" required class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option value="">Select review type</option>
                        <option value="product">Cat Product</option>
                        <option value="cafe">Cat Cafe</option>
                        <option value="service">Cat Service (vet, grooming, etc.)</option>
                        <option value="website">This Website</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 mb-2">Review Title *</label>
                    <input type="text" id="title" name="title" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md"
                           placeholder="e.g. Amazing cat toys!">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Rating *</label>
                    <div class="flex items-center">
                        @for($i = 1; $i <= 5; $i++)
                            <input type="radio" id="rating-{{ $i }}" name="rating" value="{{ $i }}"
                                   class="mr-1" {{ $i == 5 ? 'checked' : '' }}>
                            <label for="rating-{{ $i }}" class="mr-3 cursor-pointer">
                                <svg class="w-6 h-6 {{ $i <= 5 ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </label>
                        @endfor
                    </div>
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-gray-700 mb-2">Your Review * (min 20 characters)</label>
                    <textarea id="content" name="content" required minlength="20"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md h-32"
                              placeholder="Share your experience..."></textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 mb-2">Upload Image (Optional)</label>
                    <input type="file" id="image" name="image"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <p class="text-xs text-gray-500 mt-1">Max 2MB. JPG, PNG or GIF.</p>
                </div>

                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 rounded transition duration-300">
                    Submit Review
                </button>
            </form>
        </div>
    </div>

    <script>
        // Dynamic form adjustments based on review type
        document.getElementById('review_type').addEventListener('change', function() {
            const titleField = document.getElementById('title');
            if (this.value === 'website') {
                titleField.placeholder = 'e.g. Great cat adoption platform!';
            } else if (this.value === 'product') {
                titleField.placeholder = 'e.g. Amazing cat toys!';
            } else if (this.value === 'cafe') {
                titleField.placeholder = 'e.g. Lovely cat cafe experience';
            } else {
                titleField.placeholder = 'e.g. Excellent vet service';
            }
        });
    </script>
@endsection
