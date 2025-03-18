@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="background-image grid grid-cols-1 m-auto" style="background-image: url('https://cdn.pixabay.com/photo/2018/03/27/17/25/cat-3266673_1280.jpg'); background-size: cover; background-position: center;">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Welcome to Purrfect Posts
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-orange-400 hover:bg-orange-500 text-white py-2 px-4 font-bold text-xl uppercase rounded-lg transition duration-300">
                    Know more in our blog
                </a>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="rounded-lg overflow-hidden shadow-lg">
            <img src="https://cdn.pixabay.com/photo/2017/11/09/21/41/cat-2934720_1280.jpg" class="w-full h-96 object-cover" alt="Cute cat">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-8">
                Discover the Wonderful World of Cats
            </h2>

            <p class="text-lg text-gray-600 mb-8">
                Join our community of cat lovers sharing stories about:
            </p>

            <ul class="list-disc list-inside space-y-4 text-gray-600 mb-12">
                <li>Adorable kitten adventures</li>
                <li>Expert care tips</li>
                <li>Breed characteristics</li>
                <li>Funny cat moments</li>
            </ul>

            <a
                href="/blog"
                class="uppercase bg-gray-800 hover:bg-gray-900 text-white text-lg font-semibold py-3 px-8 rounded-full transition duration-300">
                Join the Community
            </a>
        </div>
    </div>

    <!-- Featured Topics Section -->
    <div class="text-center p-15 bg-orange-100 text-gray-800">
        <h2 class="text-2xl pb-5 text-l">
            Featured Cat Topics
        </h2>

        <div class="grid md:grid-cols-4 gap-8 py-8">
            <div class="p-6 bg-white rounded-lg shadow-md">
                <span class="font-bold block text-2xl mb-2">😺 Care</span>
                <p class="text-sm">Health & Nutrition</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <span class="font-bold block text-2xl mb-2">🐾 Behavior</span>
                <p class="text-sm">Understanding Your Cat</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <span class="font-bold block text-2xl mb-2">🎾 Play</span>
                <p class="text-sm">Toys & Activities</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <span class="font-bold block text-2xl mb-2">❤️ Rescue</span>
                <p class="text-sm">Adoption Stories</p>
            </div>
        </div>
    </div>

    <!-- Recent Posts Section -->
    <div class="text-center py-15 bg-white">
        <div class="w-4/5 m-auto">
            <span class="uppercase text-sm text-gray-400">
                Recent Meow-sings
            </span>

            <h2 class="text-4xl font-bold py-10 text-gray-800">
                Latest Cat Tales
            </h2>

            <p class="text-lg text-gray-600 mb-16">
                Discover fresh stories from our feline-loving community
            </p>
        </div>
    </div>

    <!-- Featured Story Section -->
    <div class="sm:grid grid-cols-2 w-4/5 m-auto mb-20">
        <div class="flex bg-gray-800 text-white pt-10 rounded-l-lg">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs text-orange-400">
                    Kitten Care
                </span>

                <h3 class="text-2xl font-bold py-10">
                    "How We Socialized Our Shy Rescue Kitten"
                </h3>

                <p class="text-gray-300 mb-12">
                    Discover our journey helping little Whiskers overcome her fears and become the most affectionate cat...
                </p>

                <a
                    href=""
                    class="uppercase bg-orange-400 hover:bg-orange-500 text-white text-sm font-semibold py-3 px-5 rounded-full transition duration-300">
                    Read Full Story
                </a>
            </div>
        </div>
        <div class="rounded-r-lg overflow-hidden shadow-lg">
            <img src="https://cdn.pixabay.com/photo/2016/09/05/21/37/cat-1647775_1280.jpg" class="w-full h-full object-cover" alt="Kitten playing">
        </div>
    </div>
@endsection
