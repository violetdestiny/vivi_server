@extends('layouts.app')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <div class="w-4/5 mx-auto">
        <!-- Hero Section with Miffy-themed Cat -->
        <div class="text-center py-20 relative">
            <div class="absolute -left-20 top-10 opacity-20 miffy-float">
                <img src="{{ asset('images/miffy/miffy-cat2.png') }}" class="w-32">
            </div>
            <h1 class="text-6xl font-bold text-miffy-brown mb-6 animate-enter">
                The Purr-fect Cat Blog
            </h1>
            <p class="text-xl text-miffy-brown mb-8 animate-enter" style="animation-delay: 0.2s">
                Discover amazing stories about our feline friends
            </p>
            <div class="absolute -right-20 bottom-10 opacity-20 miffy-float" style="animation-delay: 0.5s">
                <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-32">
            </div>
        </div>

        <!-- Featured Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            <!-- Blog Post 1: Kitten Care -->
            <div class="miffy-card overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                <a href="/blog/kitten-care-101" class="block">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/miffy/blog-kitten.jpg') }}"
                             alt="Adorable kitten"
                             class="w-full h-full object-cover transition duration-500">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                    </div>
                    <div class="p-6">
                        <div class="category-badge bg-miffy-pink text-white px-3 py-1 rounded-full text-sm inline-block mb-4">
                            Kitten Care
                        </div>
                        <h3 class="text-xl font-bold text-miffy-brown mb-2">Kitten Care 101: Your Complete Guide</h3>
                        <p class="text-gray-600 mb-4">Everything you need to know about raising a happy, healthy kitten from day one.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-5 h-5 mr-2">
                            <span>2 days ago</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Blog Post 2: Cat Behavior -->
            <div class="miffy-card overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                <a href="/blog/understanding-cat-behavior" class="block">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/miffy/blog-behavior.jpg') }}"
                             alt="Cat showing curious behavior"
                             class="w-full h-full object-cover transition duration-500">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                    </div>
                    <div class="p-6">
                        <div class="category-badge bg-miffy-pink text-white px-3 py-1 rounded-full text-sm inline-block mb-4">
                            Behavior
                        </div>
                        <h3 class="text-xl font-bold text-miffy-brown mb-2">Decoding Cat Behavior: What Your Cat is Really Saying</h3>
                        <p class="text-gray-600 mb-4">Learn to interpret your cat's body language and vocalizations like a pro.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-5 h-5 mr-2">
                            <span>1 week ago</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Blog Post 3: DIY Cat Toys -->
            <div class="miffy-card overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                <a href="/blog/diy-cat-toys" class="block">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/miffy/blog-toys.jpg') }}"
                             alt="Homemade cat toys"
                             class="w-full h-full object-cover transition duration-500">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                    </div>
                    <div class="p-6">
                        <div class="category-badge bg-miffy-pink text-white px-3 py-1 rounded-full text-sm inline-block mb-4">
                            DIY Projects
                        </div>
                        <h3 class="text-xl font-bold text-miffy-brown mb-2">10 Easy DIY Cat Toys Your Feline Will Love</h3>
                        <p class="text-gray-600 mb-4">Budget-friendly toy ideas using common household items that will keep your cat entertained for hours.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-5 h-5 mr-2">
                            <span>2 weeks ago</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Blog Post 4: Senior Cat Care -->
            <div class="miffy-card overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                <a href="/blog/senior-cat-care" class="block">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/miffy/blog-senior.jpg') }}"
                             alt="Senior cat resting"
                             class="w-full h-full object-cover transition duration-500">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                    </div>
                    <div class="p-6">
                        <div class="category-badge bg-miffy-pink text-white px-3 py-1 rounded-full text-sm inline-block mb-4">
                            Senior Care
                        </div>
                        <h3 class="text-xl font-bold text-miffy-brown mb-2">Caring for Your Senior Cat: A Compassionate Guide</h3>
                        <p class="text-gray-600 mb-4">Special considerations and tips for keeping your older cat comfortable and happy in their golden years.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-5 h-5 mr-2">
                            <span>3 weeks ago</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Blog Post 5: Cat Nutrition -->
            <div class="miffy-card overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                <a href="/blog/cat-nutrition-guide" class="block">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/miffy/blog-nutrition.jpg') }}"
                             alt="Healthy cat food"
                             class="w-full h-full object-cover transition duration-500">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                    </div>
                    <div class="p-6">
                        <div class="category-badge bg-miffy-pink text-white px-3 py-1 rounded-full text-sm inline-block mb-4">
                            Nutrition
                        </div>
                        <h3 class="text-xl font-bold text-miffy-brown mb-2">The Ultimate Cat Nutrition Guide: What to Feed for Optimal Health</h3>
                        <p class="text-gray-600 mb-4">Breaking down the essentials of feline nutrition and how to choose the best food for your cat.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-5 h-5 mr-2">
                            <span>1 month ago</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Blog Post 6: Rescue Story -->
            <div class="miffy-card overflow-hidden hover:shadow-xl transition duration-300 animate-enter">
                <a href="/blog/rescue-story-whiskers" class="block">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/miffy/blog-rescue.jpg') }}"
                             alt="Rescue cat being cuddled"
                             class="w-full h-full object-cover transition duration-500">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                    </div>
                    <div class="p-6">
                        <div class="category-badge bg-miffy-pink text-white px-3 py-1 rounded-full text-sm inline-block mb-4">
                            Rescue Stories
                        </div>
                        <h3 class="text-xl font-bold text-miffy-brown mb-2">From Stray to Spoiled: Whiskers' Heartwarming Rescue Story</h3>
                        <p class="text-gray-600 mb-4">How one scared stray transformed into the most loving companion with patience and care.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-5 h-5 mr-2">
                            <span>1 month ago</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Cat Care Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-miffy-peach rounded-xl p-12 mb-20 animate-enter border-2 border-miffy-brown">
            <div class="flex flex-col justify-center">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-4xl font-bold text-miffy-brown">Essential Cat Care Tips</h2>
                    <a href="/care-guides" class="miffy-button px-4 py-2 text-sm">
                        View All Guides
                    </a>
                </div>
                <div class="space-y-6">
                    <div class="flex items-start bg-white p-4 rounded-lg">
                        <div class="bg-miffy-pink text-white p-3 rounded-lg mr-4">
                            <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-miffy-brown">Nutrition Guide</h3>
                            <p class="text-gray-600">Learn about balanced diets and feeding schedules for cats of all ages.</p>
                            <a href="/care-guides#nutrition" class="text-miffy-pink hover:underline mt-2 inline-block">
                                Read more →
                            </a>
                        </div>
                    </div>
                    <div class="flex items-start bg-white p-4 rounded-lg">
                        <div class="bg-miffy-pink text-white p-3 rounded-lg mr-4">
                            <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-miffy-brown">Health Checkups</h3>
                            <p class="text-gray-600">Understand the importance of regular veterinary visits.</p>
                            <a href="/care-guides#health" class="text-miffy-pink hover:underline mt-2 inline-block">
                                Read more →
                            </a>
                        </div>
                    </div>
                    <div class="flex items-start bg-white p-4 rounded-lg">
                        <div class="bg-miffy-pink text-white p-3 rounded-lg mr-4">
                            <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-miffy-brown">Playtime Ideas</h3>
                            <p class="text-gray-600">Discover fun activities to keep your cat entertained.</p>
                            <a href="/care-guides#playtime" class="text-miffy-pink hover:underline mt-2 inline-block">
                                Read more →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden border-2 border-miffy-brown">
                <img src="{{ asset('images/miffy/miffy-cat1.png') }}"
                     alt="Miffy with cats"
                     class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="bg-miffy-peach rounded-xl p-8 mb-20 text-center border-2 border-miffy-brown">
            <div class="max-w-2xl mx-auto">
                <img src="{{ asset('images/miffy/miffy-cat2.png') }}" class="w-20 mx-auto mb-4">
                <h2 class="text-3xl font-bold text-miffy-brown mb-2">Join Our Cat Community</h2>
                <p class="text-gray-600 mb-6">Get weekly updates with cute cat stories and care tips</p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Your email" class="px-4 py-2 rounded-full border-2 border-miffy-brown focus:outline-none focus:ring-2 focus:ring-miffy-pink">
                    <button type="submit" class="miffy-button px-6 py-2 rounded-full">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>

    <style>
        .animate-enter {
            animation: enter 1s ease-out;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        @keyframes enter {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .category-badge {
            transition: all 0.3s ease;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .miffy-float {
            animation: float 4s ease-in-out infinite;
        }

        .miffy-card {
            box-shadow: 5px 5px 0 var(--miffy-brown);
            transition: all 0.3s ease;
        }
        .miffy-card:hover {
            transform: translateY(-5px);
            box-shadow: 8px 8px 0 var(--miffy-brown);
        }
        .miffy-button {
            background-color: var(--miffy-pink);
            color: white;
            border-radius: 9999px;
            transition: all 0.3s ease;
            border: 2px solid var(--miffy-brown);
            font-weight: bold;
        }
        .miffy-button:hover {
            background-color: var(--miffy-brown);
            transform: scale(1.05);
        }
    </style>
@endsection
