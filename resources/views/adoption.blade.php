@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Corner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Adoption Corner</h1>
    <p>Browse through our adorable cats available for adoption!</p>

    <!-- Example: List of Cats -->
    <div class="mt-6">
        @foreach ($cats as $cat)
            <div class="bg-white p-4 rounded-lg shadow mb-4">
                <h2 class="text-xl font-semibold">{{ $cat->name }}</h2>
                <p>{{ $cat->description }}</p>
                <a href="{{ route('adoption.show', $cat->id) }}" class="text-blue-500 hover:underline">View Details</a>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
@endsection
