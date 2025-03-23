<!-- resources/views/care/index.blade.php -->

@extends('layouts.app')

@section('title', 'Care Guides')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Care Guides</h1>
    <p class="mb-6">Learn how to take care of your pets with our guides.</p>

    <!-- List of Care Guides -->
    <div class="mt-6">
        @foreach ($guides as $guide)
            <div class="bg-white p-4 rounded-lg shadow mb-4">
                <h2 class="text-xl font-semibold">{{ $guide->title }}</h2>
                <p class="text-gray-700">{{ $guide->excerpt }}</p>
                <a href="{{ route('care.show', $guide->id) }}" class="text-blue-500 hover:underline">Read More</a>
            </div>
        @endforeach
    </div>
@endsection
