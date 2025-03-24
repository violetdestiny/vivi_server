@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12">
        <article class="prose lg:prose-xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">{{ $careGuide->title }}</h1>
            <img src="{{ asset($careGuide->image_path ?? 'images/default-guide.jpg') }}"
                 alt="{{ $careGuide->title }}"
                 class="w-full rounded-lg mb-8">
            <div class="content">
                {!! $careGuide->content !!}
            </div>
        </article>
    </div>
@endsection
