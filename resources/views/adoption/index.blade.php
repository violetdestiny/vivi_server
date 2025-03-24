@extends('layouts.app')

@section('title', 'Adoption Corner')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4 text-gray-800">Adoption Corner</h1>
        <p class="mb-8 text-lg text-gray-600">Browse through our adorable cats available for adoption!</p>

        @if($cats->isEmpty())
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <p class="text-gray-500">Currently no cats available for adoption. Please check back later!</p>
            </div>
        @else
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($cats as $cat)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        @if($cat->image)
                            <img src="{{ asset('storage/'.$cat->image) }}" alt="{{ $cat->name }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-100 flex items-center justify-center">
                                <span class="text-gray-400">No image available</span>
                            </div>
                        @endif

                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $cat->name }}</h2>
                            <p class="text-gray-600 mb-4">{{ Str::limit($cat->description, 100) }}</p>

                            <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                @if($cat->age)
                                    {{ $cat->age }} years old
                                @else
                                    Age unknown
                                @endif
                            </span>

                                <div class="space-x-2">
                                    <a href="{{ route('adoption.show', $cat->id) }}"
                                       class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                                        View Details
                                    </a>
                                    <span class="text-gray-300">|</span>
                                    <a href="{{ route('adoption.application', $cat->id) }}"
                                       class="text-green-500 hover:text-green-700 text-sm font-medium">
                                        Apply
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
