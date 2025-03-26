@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="background-image grid grid-cols-1 m-auto relative" style="background-image: url('{{ asset('images/miffy/miffy-cat-bg.jpg') }}'); background-size: cover; background-position: center;">
        <!-- Decorative Miffy elements -->
        <div class="absolute top-10 left-10 opacity-30 miffy-float">
            <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-24">
        </div>
        <div class="absolute bottom-10 right-10 opacity-30 miffy-float" style="animation-delay: 0.5s">
            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-24"> <!-- Updated -->
        </div>

        <div class="flex text-white pt-10 relative z-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="text-5xl uppercase font-bold text-shadow-md pb-14" style="text-shadow: 3px 3px 0 var(--miffy-brown)">
                    Welcome to Purrfect Posts
                </h1>
                <a href="/blog" class="miffy-button text-center text-white py-3 px-8 font-bold text-xl uppercase rounded-full transition duration-300 inline-block">
                    Know more in our blog
                </a>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b-2 border-miffy-pink">
        <div class="rounded-xl overflow-hidden shadow-lg border-2 border-miffy-brown">
            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-full h-96 object-contain p-8 bg-miffy-peach" alt="Miffy logo"> <!-- Updated -->
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-miffy-brown mb-8">
                Discover the Wonderful World of Cats
            </h2>

            <p class="text-lg text-gray-600 mb-8">
                Join our community of cat lovers sharing stories about:
            </p>

            <ul class="list-disc list-inside space-y-4 text-gray-600 mb-12">
                <li class="flex items-start">
                    <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-5 h-5 mr-2 mt-1">
                    <span>Adorable kitten adventures</span>
                </li>
                <li class="flex items-start">
                    <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-5 h-5 mr-2 mt-1">
                    <span>Expert care tips</span>
                </li>
                <li class="flex items-start">
                    <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-5 h-5 mr-2 mt-1">
                    <span>Breed characteristics</span>
                </li>
                <li class="flex items-start">
                    <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-5 h-5 mr-2 mt-1">
                    <span>Funny cat moments</span>
                </li>
            </ul>

            <a href="/blog" class="miffy-button uppercase text-white text-lg font-semibold py-3 px-8 rounded-full transition duration-300 inline-block">
                Join the Community
            </a>
        </div>
    </div>

    <!-- Featured Topics Section -->
    <div class="text-center p-15 bg-miffy-peach text-miffy-brown">
        <h2 class="text-3xl pb-5 font-bold">
            Featured Cat Topics
        </h2>

        <div class="grid md:grid-cols-4 gap-8 py-8 w-4/5 mx-auto">
            <div class="miffy-card p-6 rounded-xl">
                <div class="bg-miffy-pink text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-10 h-10"> <!-- Updated -->
                </div>
                <h3 class="font-bold block text-xl mb-2">Care</h3>
                <p class="text-sm">Health & Nutrition</p>
                <a href="/care-guides" class="text-miffy-pink hover:underline mt-2 inline-block text-xs">
                    Learn more →
                </a>
            </div>
            <div class="miffy-card p-6 rounded-xl">
                <div class="bg-miffy-pink text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-10 h-10"> <!-- Updated -->
                </div>
                <h3 class="font-bold block text-xl mb-2">Behavior</h3>
                <p class="text-sm">Understanding Your Cat</p>
                <a href="/care-guides#behavior" class="text-miffy-pink hover:underline mt-2 inline-block text-xs">
                    Learn more →
                </a>
            </div>
            <div class="miffy-card p-6 rounded-xl">
                <div class="bg-miffy-pink text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-10 h-10"> <!-- Updated -->
                </div>
                <h3 class="font-bold block text-xl mb-2">Play</h3>
                <p class="text-sm">Toys & Activities</p>
                <a href="/diy-toys" class="text-miffy-pink hover:underline mt-2 inline-block text-xs">
                    Learn more →
                </a>
            </div>
            <div class="miffy-card p-6 rounded-xl">
                <div class="bg-miffy-pink text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-10 h-10"> <!-- Updated -->
                </div>
                <h3 class="font-bold block text-xl mb-2">Rescue</h3>
                <p class="text-sm">Adoption Stories</p>
                <a href="/adoption" class="text-miffy-pink hover:underline mt-2 inline-block text-xs">
                    Learn more →
                </a>
            </div>
        </div>
    </div>

    <!-- Recent Posts Section -->
    <div class="text-center py-15 bg-white">
        <div class="w-4/5 m-auto">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-8 h-8 mx-2">
                <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-8 h-8 mx-2"> <!-- Updated -->
                <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-8 h-8 mx-2">
            </div>
            <h2 class="text-4xl font-bold py-10 text-miffy-brown">
                Latest Cat Tales
            </h2>
            <p class="text-lg text-gray-600 mb-16">
                Discover fresh stories from our feline-loving community
            </p>
        </div>
    </div>

    <!-- Featured Story Section -->
    <div class="sm:grid grid-cols-2 w-4/5 m-auto mb-20 rounded-xl overflow-hidden border-2 border-miffy-brown">
        <div class="flex bg-miffy-brown text-white pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs text-miffy-pink">
                    Kitten Care
                </span>
                <h3 class="text-2xl font-bold py-10">
                    "How We Socialized Our Shy Rescue Kitten"
                </h3>
                <p class="text-gray-200 mb-12">
                    Discover our journey helping little Whiskers overcome her fears and become the most affectionate cat...
                </p>
                <a href="/blog/kitten-socialization" class="miffy-button bg-miffy-pink hover:bg-pink-600 text-white text-sm font-semibold py-3 px-5 rounded-full transition duration-300 inline-block">
                    Read Full Story
                </a>
            </div>
        </div>
        <div class="rounded-r-lg overflow-hidden">
            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-full h-full object-contain bg-miffy-peach p-8" alt="Miffy logo"> <!-- Updated -->
        </div>
    </div>

    <style>
        .background-image {
            position: relative;
        }
        .background-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 154, 162, 0.2);
        }
        .miffy-float {
            animation: float 4s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
@endsection
