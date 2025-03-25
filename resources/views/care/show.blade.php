@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="container mx-auto py-12 px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-blue-600 py-4 px-6">
                    <h1 class="text-3xl font-bold text-white">{{ $careGuide->title }}</h1>
                    <p class="text-blue-100">Category: {{ $careGuide->category }}</p>
                </div>

                <img src="{{ asset($careGuide->image_path ?? 'images/default-guide.jpg') }}"
                     alt="{{ $careGuide->title }}"
                     class="w-full h-64 object-cover">

                <div class="p-6 prose prose-blue max-w-none">
                    {!! $careGuide->content !!}
                </div>

                <div class="px-6 pb-6">
                    <a href="{{ route('care-guides.index') }}"
                       class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        ← Back to Guides
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
