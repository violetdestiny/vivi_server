@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-blue-50">
        <div class="container mx-auto py-12 px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-blue-800 mb-2">Cat Care Guides</h1>
                <p class="text-blue-600 max-w-2xl mx-auto">Expert advice for your feline friends</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($guides as $guide)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="{{ asset($guide->image_path ?? 'images/default-guide.jpg') }}"
                             alt="{{ $guide->title }}"
                             class="w-full h-48 object-cover">
                        <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-2">
                            {{ $guide->category }}
                        </span>
                            <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $guide->title }}</h2>
                            <a href="{{ route('care-guides.show', $guide->slug) }}"
                               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                Read Guide
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
