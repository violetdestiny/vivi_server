<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Purrfect Posts | Miffy's Cat Paradise</title>

    <!-- Favicon -->
    <link rel="icon" href="https://i.imgur.com/LQ5f8dE.png" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Short+Stack&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        /* Miffy Aesthetic Theme */
        :root {
            --miffy-peach: #FFDAC7;
            --miffy-pink: #FF9AA2;
            --miffy-brown: #B07C62;
            --miffy-cream: #FFF5EB;
        }

        body {
            font-family: 'Short Stack', 'Comic Neue', cursive;
            background-color: var(--miffy-cream);
            padding-top: 80px;
            color: var(--miffy-brown);
            background-image: url('https://i.imgur.com/JjQhZ3a.png');
            background-attachment: fixed;
            background-size: 300px;
            background-position: right bottom;
            background-repeat: no-repeat;
        }

        .miffy-nav {
            background-color: var(--miffy-pink) !important;
            border-bottom: 3px solid var(--miffy-brown);
            box-shadow: 0 4px 15px rgba(176, 124, 98, 0.2);
        }

        .miffy-logo {
            font-family: 'Short Stack', cursive;
            font-weight: 700;
            color: white !important;
            text-shadow: 2px 2px 0 var(--miffy-brown);
            letter-spacing: 1px;
        }

        .miffy-link {
            color: white !important;
            font-weight: 700;
            position: relative;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 20px;
        }

        .miffy-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .miffy-link.active {
            background-color: var(--miffy-peach);
            color: var(--miffy-brown) !important;
        }

        .miffy-link:hover::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 10px;
            background-image: url('https://i.imgur.com/5XJQk9G.png');
            background-size: contain;
            background-repeat: no-repeat;
        }

        .miffy-bg {
            background-color: var(--miffy-peach);
        }

        .miffy-button {
            background-color: var(--miffy-brown);
            color: white;
            border-radius: 20px;
            transition: all 0.3s ease;
            border: 2px solid white;
            font-weight: bold;
        }

        .miffy-button:hover {
            background-color: var(--miffy-pink);
            transform: scale(1.05);
            color: white;
        }

        .fixed-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .miffy-footer {
            background-color: var(--miffy-pink);
            border-top: 3px solid var(--miffy-brown);
        }

        .miffy-card {
            background-color: white;
            border-radius: 15px;
            border: 2px solid var(--miffy-brown);
            box-shadow: 5px 5px 0 var(--miffy-peach);
            transition: all 0.3s ease;
        }

        .miffy-card:hover {
            transform: translateY(-5px);
            box-shadow: 8px 8px 0 var(--miffy-peach);
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .miffy-float {
            animation: float 4s ease-in-out infinite;
        }

        .miffy-divider {
            height: 3px;
            background-color: var(--miffy-pink);
            margin: 2rem 0;
            position: relative;
        }

        .miffy-divider::after {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 20px;
            background-image: url('https://i.imgur.com/5XJQk9G.png');
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
<!-- Decorative Miffy Elements -->
<div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <img src="https://i.imgur.com/LQ5f8dE.png"
         class="absolute top-20 left-10 w-24 opacity-30 miffy-float"
         style="animation-delay: 0.2s;">
    <img src="https://i.imgur.com/8JtYQ7v.png"
         class="absolute bottom-1/4 right-20 w-20 opacity-30 miffy-float"
         style="animation-delay: 0.5s;">
    <img src="https://i.imgur.com/9XkJQpC.png"
         class="absolute top-1/3 right-1/4 w-16 opacity-20 miffy-float"
         style="animation-delay: 0.8s;">
</div>

<!-- Fixed Navigation -->
<nav class="fixed-nav miffy-nav">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <a href="{{ url('/') }}" class="miffy-logo text-2xl no-underline flex items-center">
                    <img src="https://i.imgur.com/LQ5f8dE.png" class="h-10 mr-2" alt="Miffy">
                    Purrfect Posts
                </a>
            </div>

            <!-- Main Navigation -->
            <div class="hidden md:flex items-center space-x-2">
                <a href="{{ url('/') }}" class="miffy-link no-underline {{ request()->is('/') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ route('blog.index') }}" class="miffy-link no-underline {{ request()->is('blog*') ? 'active' : '' }}">
                    Blog
                </a>
                <a href="/adoption" class="miffy-link no-underline {{ request()->is('adoption*') ? 'active' : '' }}">
                    Adoption
                </a>
                <a href="/care-guides" class="miffy-link no-underline {{ request()->is('care-guides*') ? 'active' : '' }}">
                    Care Guides
                </a>
                <a href="/diy-toys" class="miffy-link no-underline {{ request()->is('diy-toys*') ? 'active' : '' }}">
                    DIY Toys
                </a>
                <a href="/reviews" class="miffy-link no-underline {{ request()->is('reviews*') ? 'active' : '' }}">
                    Reviews
                </a>
            </div>

            <!-- Auth Links -->
            <div class="flex items-center space-x-4 text-white">
                @guest
                    <a href="{{ route('login') }}" class="miffy-link no-underline">
                        Login
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="miffy-button px-4 py-1 no-underline">
                            Register
                        </a>
                    @endif
                @else
                    <div class="flex items-center space-x-3">
                        <span class="text-white font-bold">{{ Auth::user()->name }}</span>
                        <img src="https://i.imgur.com/VbnUQpn.png" class="h-8 w-8 rounded-full border-2 border-white">
                        <a href="{{ route('logout') }}"
                           class="miffy-link no-underline"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white focus:outline-none" id="mobile-menu-button">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden miffy-bg" id="mobile-menu">
        <div class="px-2 pt-2 pb-4 space-y-2">
            <a href="{{ url('/') }}" class="block px-4 py-2 rounded-lg text-base font-medium {{ request()->is('/') ? 'bg-white text-miffy-brown' : 'text-gray-800' }} hover:bg-white">
                Home
            </a>
            <a href="{{ route('blog.index') }}" class="block px-4 py-2 rounded-lg text-base font-medium {{ request()->is('blog*') ? 'bg-white text-miffy-brown' : 'text-gray-800' }} hover:bg-white">
                Blog
            </a>
            <a href="/adoption" class="block px-4 py-2 rounded-lg text-base font-medium {{ request()->is('adoption*') ? 'bg-white text-miffy-brown' : 'text-gray-800' }} hover:bg-white">
                Adoption
            </a>
            <a href="/care-guides" class="block px-4 py-2 rounded-lg text-base font-medium {{ request()->is('care-guides*') ? 'bg-white text-miffy-brown' : 'text-gray-800' }} hover:bg-white">
                Care Guides
            </a>
            <a href="/diy-toys" class="block px-4 py-2 rounded-lg text-base font-medium {{ request()->is('diy-toys*') ? 'bg-white text-miffy-brown' : 'text-gray-800' }} hover:bg-white">
                DIY Toys
            </a>
            <a href="/reviews" class="block px-4 py-2 rounded-lg text-base font-medium {{ request()->is('reviews*') ? 'bg-white text-miffy-brown' : 'text-gray-800' }} hover:bg-white">
                Reviews
            </a>
            <div class="miffy-divider"></div>
            @guest
                <a href="{{ route('login') }}" class="block px-4 py-2 rounded-lg text-base font-medium text-gray-800 hover:bg-white">
                    Login
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block text-center px-4 py-2 rounded-lg text-base font-medium text-white bg-miffy-brown hover:bg-miffy-pink">
                        Register
                    </a>
                @endif
            @endguest
        </div>
    </div>
</nav>

<!-- Page Content -->
<main class="flex-grow z-10 relative">
    @yield('content')
</main>

<!-- Footer -->
<footer class="miffy-footer py-6 text-white mt-8">
    <div class="container mx-auto px-6 text-center">
        <div class="flex justify-center mb-4 space-x-6">
            <img src="https://i.imgur.com/LQ5f8dE.png" class="h-12">
            <img src="https://i.imgur.com/8JtYQ7v.png" class="h-12">
            <img src="https://i.imgur.com/9XkJQpC.png" class="h-12">
            <img src="https://i.imgur.com/VbnUQpn.png" class="h-12">
        </div>
        <p class="text-lg font-bold mb-2">Miffy's Purrfect Cat Blog</p>
        <p class="text-sm">© {{ date('Y') }} All rights reserved | Made with ♥ by Miffy's Friends</p>
    </div>
</footer>

<!-- Mobile Menu Script -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>
