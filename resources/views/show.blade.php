@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cat->name }} - Adoption Corner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">{{ $cat->name }}</h1>
    <p>{{ $cat->description }}</p>
    <a href="{{ route('adoption.index') }}" class="text-blue-500 hover:underline">Back to Adoption Corner</a>
</div>
</body>
</html>
@endsection
