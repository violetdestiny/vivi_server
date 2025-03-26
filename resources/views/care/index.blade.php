@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-miffy-peach">
        <div class="container mx-auto py-12 px-4">
            <!-- Header Section -->
            <div class="text-center mb-12 relative">
                <!-- Decorative Miffy elements -->
                <img src="{{ asset('images/miffy/miffy-character.png') }}" class="absolute -left-20 top-0 w-24 opacity-20 miffy-float">
                <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="absolute -right-20 bottom-0 w-24 opacity-20 miffy-float" style="animation-delay: 0.5s">

                <h1 class="text-4xl font-bold text-miffy-brown mb-2">Miffy's Cat Care Guides</h1>
                <p class="text-miffy-brown max-w-2xl mx-auto">Expert advice for every stage of your cat's life</p>

                <!-- Category Filter -->
                <div class="flex flex-wrap justify-center gap-2 mt-6">
                    <a href="{{ route('care.index') }}"
                       class="px-4 py-2 rounded-full {{ !request('category') ? 'bg-miffy-pink text-white' : 'bg-white text-miffy-brown' }} hover:bg-miffy-peach transition border border-miffy-brown">
                        All Guides
                    </a>
                    @foreach(['Kitten Care', 'Senior Care', 'Nutrition', 'Grooming', 'Behavior', 'Health'] as $category)
                        <a href="{{ route('care.index', ['category' => $category]) }}"
                           class="px-4 py-2 rounded-full {{ request('category') == $category ? 'bg-miffy-pink text-white' : 'bg-white text-miffy-brown' }} hover:bg-miffy-peach transition border border-miffy-brown">
                            {{ $category }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Special Feature: Interactive Cat Care Quiz -->
            <div class="miffy-card bg-white p-6 rounded-xl mb-12 border-2 border-miffy-brown">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/3 mb-4 md:mb-0">
                        <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-32 mx-auto">
                    </div>
                    <div class="md:w-2/3 text-center md:text-left">
                        <h2 class="text-2xl font-bold text-miffy-brown mb-2">Take Our Cat Care Quiz!</h2>
                        <p class="text-gray-600 mb-4">Discover how much you know about cat care and get personalized tips</p>
                        <button id="startQuizBtn" class="miffy-button px-6 py-2 rounded-full">
                            Start Quiz Now
                        </button>
                    </div>
                </div>

                <!-- Quiz Container (hidden by default) -->
                <div id="quizContainer" class="hidden mt-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold text-miffy-brown mb-2" id="quizQuestion">Question 1</h3>
                        <div id="quizOptions" class="space-y-2">
                            <!-- Options will be inserted here by JavaScript -->
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span id="quizProgress" class="text-sm text-miffy-brown">1 of 5</span>
                        <button id="nextQuestionBtn" class="miffy-button px-4 py-1 rounded-full text-sm">
                            Next Question
                        </button>
                    </div>
                </div>

                <!-- Quiz Results (hidden by default) -->
                <div id="quizResults" class="hidden mt-6 p-4 bg-miffy-peach rounded-lg">
                    <h3 class="text-xl font-bold text-miffy-brown mb-2">Your Results</h3>
                    <p id="quizScore" class="mb-4"></p>
                    <div id="quizRecommendations"></div>
                </div>
            </div>

            <!-- Video Tutorials Section -->
            <div class="miffy-card bg-white p-6 rounded-xl mb-12 border-2 border-miffy-brown">
                <h2 class="text-2xl font-bold text-miffy-brown mb-6 flex items-center">
                    <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-8 h-8 mr-2">
                    Video Tutorials
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Video 1 -->
                    <div class="bg-miffy-peach rounded-lg overflow-hidden border border-miffy-brown">
                        <div class="aspect-w-16 aspect-h-9 bg-black">
                            <iframe class="w-full h-48" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-miffy-brown mb-2">Basic Cat Grooming</h3>
                            <p class="text-sm text-gray-600 mb-2">Learn how to properly groom your cat</p>
                            <span class="text-xs text-miffy-pink">Duration: 5:23</span>
                        </div>
                    </div>

                    <!-- Video 2 -->
                    <div class="bg-miffy-peach rounded-lg overflow-hidden border border-miffy-brown">
                        <div class="aspect-w-16 aspect-h-9 bg-black">
                            <iframe class="w-full h-48" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-miffy-brown mb-2">Litter Box Training</h3>
                            <p class="text-sm text-gray-600 mb-2">Essential tips for kittens</p>
                            <span class="text-xs text-miffy-pink">Duration: 3:45</span>
                        </div>
                    </div>

                    <!-- Video 3 -->
                    <div class="bg-miffy-peach rounded-lg overflow-hidden border border-miffy-brown">
                        <div class="aspect-w-16 aspect-h-9 bg-black">
                            <iframe class="w-full h-48" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-miffy-brown mb-2">Cat First Aid Basics</h3>
                            <p class="text-sm text-gray-600 mb-2">What every cat owner should know</p>
                            <span class="text-xs text-miffy-pink">Duration: 7:12</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Care Guides Section -->
            @if($guides->isEmpty())
                <div class="text-center miffy-card p-8 bg-white rounded-xl border-2 border-miffy-brown">
                    <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-32 mx-auto mb-4">
                    <p class="text-lg text-gray-600">No care guides found. Check back soon!</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($guides as $guide)
                        <div class="miffy-card bg-white rounded-xl overflow-hidden hover:shadow-xl transition duration-300 border-2 border-miffy-brown">
                            <div class="relative h-48 overflow-hidden">
                                @if($guide->image_path)
                                    <img src="{{ asset('storage/' . $guide->image_path) }}"
                                         alt="{{ $guide->title }}"
                                         class="w-full h-full object-cover transition duration-500 hover:scale-105">
                                @else
                                    <div class="w-full h-full bg-miffy-peach flex items-center justify-center">
                                        <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="w-32">
                                    </div>
                                @endif
                                <span class="absolute top-4 right-4 bg-miffy-pink text-white px-3 py-1 rounded-full text-xs font-bold">
                                {{ $guide->category }}
                            </span>
                            </div>
                            <div class="p-6">
                                <h2 class="text-xl font-bold text-miffy-brown mb-2">{{ $guide->title }}</h2>
                                <p class="text-gray-600 mb-4 line-clamp-2">{{ Str::words(strip_tags($guide->content), 15) }}</p>
                                <a href="{{ route('care.show', $guide->slug) }}"
                                   class="inline-flex items-center text-miffy-pink hover:text-miffy-brown font-medium group">
                                    Read Guide
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $guides->links() }}
                </div>
            @endif
        </div>
    </div>

    <!-- Quiz Questions Data -->
    <script>
        const quizQuestions = [
            {
                question: "How often should you take your cat to the vet for a check-up?",
                options: [
                    "Only when they're sick",
                    "Once a year",
                    "Twice a year",
                    "Every month"
                ],
                correct: 1,
                explanation: "Adult cats should have at least one veterinary check-up per year. Senior cats or those with health issues may need twice-yearly visits."
            },
            {
                question: "What's the best way to introduce a new cat to your home?",
                options: [
                    "Let them explore freely right away",
                    "Keep them in one room at first",
                    "Introduce them to other pets immediately",
                    "Leave them outside to adjust"
                ],
                correct: 1,
                explanation: "Start by confining your new cat to one room with all their essentials, then gradually introduce them to other areas of your home."
            },
            {
                question: "How much water does an average cat need daily?",
                options: [
                    "About 1 cup (250ml)",
                    "About 3.5-4.5 ounces per 5 pounds of body weight",
                    "Cats don't need to drink water",
                    "As much as they want"
                ],
                correct: 1,
                explanation: "Cats need about 3.5-4.5 ounces of water per 5 pounds of body weight per day, which can come from both drinking water and their food."
            }
        ];

        // Quiz functionality
        document.getElementById('startQuizBtn').addEventListener('click', function() {
            this.classList.add('hidden');
            document.getElementById('quizContainer').classList.remove('hidden');
            loadQuestion(0);
        });

        let currentQuestion = 0;
        let score = 0;

        function loadQuestion(index) {
            const question = quizQuestions[index];
            document.getElementById('quizQuestion').textContent = question.question;

            const optionsContainer = document.getElementById('quizOptions');
            optionsContainer.innerHTML = '';

            question.options.forEach((option, i) => {
                const optionElement = document.createElement('button');
                optionElement.className = 'w-full text-left p-2 rounded bg-miffy-peach hover:bg-miffy-pink hover:text-white transition';
                optionElement.textContent = option;
                optionElement.addEventListener('click', () => selectAnswer(i));
                optionsContainer.appendChild(optionElement);
            });

            document.getElementById('quizProgress').textContent = `${index + 1} of ${quizQuestions.length}`;
        }

        function selectAnswer(selectedIndex) {
            const question = quizQuestions[currentQuestion];
            if (selectedIndex === question.correct) {
                score++;
            }

            // Highlight correct answer
            const options = document.querySelectorAll('#quizOptions button');
            options[question.correct].classList.add('bg-green-100', 'text-green-800');

            // Disable all options
            options.forEach(option => {
                option.disabled = true;
            });

            // Show next button or results
            if (currentQuestion < quizQuestions.length - 1) {
                document.getElementById('nextQuestionBtn').classList.remove('hidden');
            } else {
                document.getElementById('nextQuestionBtn').textContent = 'See Results';
            }
        }

        document.getElementById('nextQuestionBtn').addEventListener('click', function() {
            currentQuestion++;
            if (currentQuestion < quizQuestions.length) {
                loadQuestion(currentQuestion);
                this.classList.add('hidden');
            } else {
                showResults();
            }
        });

        function showResults() {
            document.getElementById('quizContainer').classList.add('hidden');
            const resultsContainer = document.getElementById('quizResults');
            resultsContainer.classList.remove('hidden');

            document.getElementById('quizScore').textContent = `You scored ${score} out of ${quizQuestions.length}!`;

            const recommendations = document.getElementById('quizRecommendations');
            recommendations.innerHTML = '<h4 class="font-semibold text-miffy-brown mb-2">Recommendations:</h4>';

            // Add personalized recommendations based on score
            if (score === quizQuestions.length) {
                recommendations.innerHTML += '<p>Purrfect! You\'re a cat care expert!</p>';
            } else if (score >= quizQuestions.length / 2) {
                recommendations.innerHTML += '<p>Good job! Check out our care guides to learn even more.</p>';
            } else {
                recommendations.innerHTML += '<p>Don\'t worry! Our care guides can help you become a better cat parent.</p>';
            }

            recommendations.innerHTML += `<a href="/care-guides" class="miffy-button inline-block mt-4 px-4 py-2 text-sm">Explore Care Guides</a>`;
        }
    </script>

    <style>
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
