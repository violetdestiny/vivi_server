@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold mb-8">Cat Care Guides</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($guides as $guide)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset($guide->image_path ?? 'images/default-guide.jpg') }}"
                         alt="{{ $guide->title }}"
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2">{{ $guide->title }}</h2>
                        <a href="{{ route('care.show', $guide) }}"
                           class="text-blue-600 hover:underline">Read Guide</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
