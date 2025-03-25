@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-blue-50">
        <div class="container mx-auto py-12 px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-blue-800 mb-2">Cat Care Guides</h1>
                <p class="text-blue-600 max-w-2xl mx-auto">Expert advice for every stage of your cat's life</p>

                <!-- Category Filter -->
                <div class="flex flex-wrap justify-center gap-2 mt-6">
                    <a href="{{ route('care.index') }}"
                       class="px-4 py-2 rounded-full {{ !request('category') ? 'bg-blue-600 text-white' : 'bg-white text-blue-600' }} hover:bg-blue-100 transition">
                        All Guides
                    </a>
                    @foreach(['Kitten Care', 'Senior Care', 'Nutrition', 'Grooming', 'Behavior', 'Health'] as $category)
                        <a href="{{ route('care.index', ['category' => $category]) }}"
                           class="px-4 py-2 rounded-full {{ request('category') == $category ? 'bg-blue-600 text-white' : 'bg-white text-blue-600' }} hover:bg-blue-100 transition">
                            {{ $category }}
                        </a>
                    @endforeach
                </div>
            </div>

            @if($guides->isEmpty())
                <div class="text-center py-12">
                    <p class="text-lg text-gray-600">No care guides found. Check back soon!</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($guides as $guide)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $guide->image_path) }}"
                                     alt="{{ $guide->title }}"
                                     class="w-full h-full object-cover transition duration-500 hover:scale-105">
                                <span class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                                    {{ $guide->category }}
                                </span>
                            </div>
                            <div class="p-6">
                                <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $guide->title }}</h2>
                                <p class="text-gray-600 mb-4 line-clamp-2">{{ Str::words(strip_tags($guide->content), 15) }}</p>
                                <a href="{{ route('care.show', $guide->slug) }}"
                                   class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium group">
                                    Read Guide
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $guides->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
