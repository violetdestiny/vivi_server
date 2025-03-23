<!-- resources/views/diy/index.blade.php -->

@extends('layouts.app')

@section('title', 'DIY Toys')

@section('content')
    <h1 class="text-3xl font-bold mb-4">DIY Toys</h1>
    <p class="mb-6">Discover fun and creative DIY toys for your pets.</p>

    <!-- List of DIY Toys -->
    <div class="mt-6">
        @foreach ($toys as $toy)
            <div class="bg-white p-4 rounded-lg shadow mb-4">
                <h2 class="text-xl font-semibold">{{ $toy->name }}</h2>
                <p class="text-gray-700">{{ $toy->description }}</p>
                <a href="{{ route('diy.show', $toy->id) }}" class="text-blue-500 hover:underline">View Details</a>
            </div>
        @endforeach
    </div>
@endsection
