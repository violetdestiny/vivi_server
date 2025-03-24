@extends('layouts.app')

@section('title', 'DIY Toy Details')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-3xl font-bold mb-4">{{ $toy->name }}</h1>

        @if($toy->image)
            <img src="{{ asset('storage/' . $toy->image) }}" alt="{{ $toy->name }}" class="w-full h-64 object-cover mb-4 rounded-lg">
        @endif

        <div class="prose max-w-none">
            <p class="text-gray-700 mb-6">{{ $toy->description }}</p>

            <div class="bg-gray-100 p-4 rounded-lg mb-6">
                <h2 class="text-xl font-semibold mb-2">Materials Needed:</h2>
                <ul class="list-disc pl-5">
                    <li>Cardboard boxes</li>
                    <li>Non-toxic glue</li>
                    <li>Scissors</li>
                </ul>
            </div>

            <h2 class="text-xl font-semibold mb-2">Instructions:</h2>
            <ol class="list-decimal pl-5 space-y-2">
                <li>Cut the cardboard into various shapes</li>
                <li>Assemble the pieces to create tunnels</li>
                <li>Secure with non-toxic glue</li>
                <li>Let dry completely before giving to your pet</li>
            </ol>
        </div>

        <a href="{{ route('diy.index') }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">
            Back to All Toys
        </a>
    </div>
@endsection
