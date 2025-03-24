@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow overflow-hidden">
            <!-- Cat Image (you might want to add this field to your Cat model) -->
            @if($cat->image)
                <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->name }}" class="w-full h-64 object-cover">
            @else
                <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500">No image available</span>
                </div>
            @endif

            <div class="p-6">
                <h1 class="text-3xl font-bold mb-2">{{ $cat->name }}</h1>

                <!-- Basic Info -->
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <p class="text-gray-600">Breed:</p>
                        <p class="font-medium">{{ $cat->breed ?? 'Unknown' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Age:</p>
                        <p class="font-medium">{{ $cat->age ?? 'Unknown' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Gender:</p>
                        <p class="font-medium">{{ $cat->gender ?? 'Unknown' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Adoption Fee:</p>
                        <p class="font-medium">{{ $cat->fee ? '$'.$cat->fee : 'Free' }}</p>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold mb-2">About {{ $cat->name }}</h2>
                    <p class="text-gray-700">{{ $cat->description }}</p>
                </div>

                <!-- Action Buttons -->
                <div class="flex space-x-4">
                    <a href="{{ route('adoption.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
                        Back to All Cats
                    </a>
                    <a href="{{ route('adoption.application', $cat->id) }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                        Apply to Adopt
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
