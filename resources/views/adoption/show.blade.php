@extends('layouts.app')

@section('title', $cat->name . ' - Adoption Details')

@section('content')
    <div class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            @if($cat->image)
                <img src="{{ asset('storage/'.$cat->image) }}" alt="{{ $cat->name }}" class="w-full h-64 object-cover">
            @else
                <div class="w-full h-64 bg-gray-100 flex items-center justify-center">
                    <span class="text-gray-400">No image available</span>
                </div>
            @endif

            <div class="p-6">
                <h1 class="text-2xl font-bold mb-2 text-gray-800">{{ $cat->name }}</h1>

                <div class="mb-4">
                <span class="text-gray-600">
                    @if($cat->age)
                        {{ $cat->age }} years old
                    @else
                        Age unknown
                    @endif
                </span>
                    <span class="mx-2 text-gray-300">•</span>
                    <span class="text-gray-600">
                    {{ ucfirst($cat->gender) }}
                </span>
                </div>

                <div class="mb-6">
                    <h2 class="text-lg font-semibold mb-2">About Me</h2>
                    <p class="text-gray-700 whitespace-pre-line">{{ $cat->description }}</p>
                </div>

                <div class="mb-6">
                    <h2 class="text-lg font-semibold mb-2">Personality Traits</h2>
                    <div class="flex flex-wrap gap-2">
                        @if($cat->is_friendly)
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Friendly</span>
                        @endif
                        @if($cat->is_playful)
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Playful</span>
                        @endif
                        @if($cat->is_affectionate)
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Affectionate</span>
                        @endif
                    </div>
                </div>

                <a href="{{ route('adoption.application', $cat->id) }}"
                   class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    Apply to Adopt {{ $cat->name }}
                </a>
            </div>
        </div>
    </div>
@endsection
