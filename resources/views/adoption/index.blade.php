@extends('layouts.app')

@section('title', 'Adoption Corner')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Adoption Corner</h1>
    <p class="mb-6">Browse through our adorable cats available for adoption!</p>

    <!-- List of Cats -->
    <div class="mt-6">
        @foreach ($cats as $cat)
            <div class="bg-white p-4 rounded-lg shadow mb-4">
                <h2 class="text-xl font-semibold">{{ $cat->name }}</h2>
                <p class="text-gray-700">{{ $cat->description }}</p>
                <a href="{{ route('adoption.show', $cat->id) }}" class="text-blue-500 hover:underline">View Details</a>
            </div>
        @endforeach
    </div>

    <!-- Adoption Application Link -->
    <div class="mt-6">
        <a href="{{ route('adoption.apply') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Apply for Adoption</a>
    </div>
@endsection
