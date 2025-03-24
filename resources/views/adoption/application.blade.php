@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Adoption Application for {{ $cat->name }}</h1>

        <form action="{{ route('adoption.apply.submit') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
            @csrf
            <input type="hidden" name="cat_id" value="{{ $cat->id }}">

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Your Name</label>
                <input type="text" name="name" required class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Email</label>
                <input type="email" name="email" required class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Why would you like to adopt {{ $cat->name }}?</label>
                <textarea name="reason" required class="w-full p-2 border rounded" rows="4"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Submit Application
            </button>
        </form>
    </div>
@endsection
