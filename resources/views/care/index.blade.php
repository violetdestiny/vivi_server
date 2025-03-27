@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-miffy-peach">
        <div class="container mx-auto py-12 px-4">
            <!-- Header Section - Simplified -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-miffy-brown mb-2">Miffy's Cat Care Guides</h1>
                <p class="text-miffy-brown max-w-2xl mx-auto">Expert advice for your feline friends</p>
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
                        <button id="nextQuestionBtn" class="miffy-button px-4 py-1 rounded-full text-sm hidden">
                            Next Question
                        </button>
                    </div>
                </div>

                <!-- Quiz Results (hidden by default) -->
                <div id="quizResults" class="hidden mt-6 p-6 bg-miffy-peach rounded-lg border-2 border-miffy-brown">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-10 h-10 mr-3">
                        <h3 class="text-2xl font-bold text-miffy-brown">Your Results</h3>
                    </div>

                    <div id="quizScore" class="text-lg font-semibold text-miffy-brown mb-4"></div>

                    <div id="quizRecommendations" class="mb-6">
                        <h4 class="text-xl font-semibold text-miffy-brown mb-2">Recommendations:</h4>
                        <div id="recommendationContent" class="space-y-3"></div>
                    </div>

                    <div id="instagramRecommendations" class="mt-6">
                        <h4 class="text-xl font-semibold text-miffy-brown mb-3">Follow These Instagram Accounts:</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4" id="instagramAccounts"></div>
                    </div>
                </div>
            </div>

            <!-- Video Tutorials Section - Enhanced with new videos -->
            <div class="miffy-card bg-white p-6 rounded-xl mb-12 border-2 border-miffy-brown">
                <h2 class="text-2xl font-bold text-miffy-brown mb-6 flex items-center">
                    <img src="{{ asset('images/miffy/miffy-paw.png') }}" class="w-8 h-8 mr-2">
                    Cat Care Video Tutorials
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- New Video 1 -->
                    <div class="bg-miffy-peach rounded-lg overflow-hidden border border-miffy-brown transform hover:scale-105 transition duration-300">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe class="w-full h-64" src="https://www.youtube.com/embed/0XPRz8ZUkck" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-miffy-brown mb-2">Cat Grooming 101</h3>
                            <p class="text-sm text-gray-600 mb-2">Complete guide to grooming your cat at home</p>
                        </div>
                    </div>

                    <!-- New Video 2 -->
                    <div class="bg-miffy-peach rounded-lg overflow-hidden border border-miffy-brown transform hover:scale-105 transition duration-300">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe class="w-full h-64" src="https://www.youtube.com/embed/WzuhuaeS0aQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-miffy-brown mb-2">Litter Box Training</h3>
                            <p class="text-sm text-gray-600 mb-2">Essential tips for perfect litter box setup</p>
                        </div>
                    </div>

                    <!-- New Video 3 -->
                    <div class="bg-miffy-peach rounded-lg overflow-hidden border border-miffy-brown transform hover:scale-105 transition duration-300">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe class="w-full h-64" src="https://www.youtube.com/embed/rR6aXt-bRGs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-miffy-brown mb-2">Cat Playtime Essentials</h3>
                            <p class="text-sm text-gray-600 mb-2">How to keep your cat active and engaged</p>
                        </div>
                    </div>

                    <!-- Original Video 1 -->
                    <div class="bg-miffy-peach rounded-lg overflow-hidden border border-miffy-brown transform hover:scale-105 transition duration-300">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe class="w-full h-64" src="https://www.youtube.com/embed/VZL1PVSjaQA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-miffy-brown mb-2">Basic Cat Care Guide</h3>
                            <p class="text-sm text-gray-600 mb-2">Essential tips for new cat owners</p>
                        </div>
                    </div>

                    <!-- Original Video 2 -->
                    <div class="bg-miffy-peach rounded-lg overflow-hidden border border-miffy-brown transform hover:scale-105 transition duration-300">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe class="w-full h-64" src="https://www.youtube.com/embed/tpiyEe_CqB4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-miffy-brown mb-2">Cat Grooming Techniques</h3>
                            <p class="text-sm text-gray-600 mb-2">How to properly groom your cat</p>
                        </div>
                    </div>

                    <!-- Original Video 3 -->
                    <div class="bg-miffy-peach rounded-lg overflow-hidden border border-miffy-brown transform hover:scale-105 transition duration-300">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe class="w-full h-64" src="https://www.youtube.com/embed/DaczPZlPrYM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-miffy-brown mb-2">Understanding Cat Behavior</h3>
                            <p class="text-sm text-gray-600 mb-2">Decode your cat's body language</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Care Guides Section - Improved layout -->
            @if($guides->isEmpty())
                <!-- Removed the "No care guides found" div as requested -->
            @else
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-miffy-brown mb-2">All Care Guides</h2>
                    <div class="w-24 h-1 bg-miffy-pink mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($guides as $guide)
                        <div class="miffy-card bg-white rounded-xl overflow-hidden hover:shadow-xl transition duration-300 border-2 border-miffy-brown transform hover:-translate-y-2">
                            <div class="relative h-48 overflow-hidden">
                                @if($guide->image_path)
                                    <img src="{{ asset('storage/' . $guide->image_path) }}"
                                         alt="{{ $guide->title }}"
                                         class="w-full h-full object-cover transition duration-500 hover:scale-110">
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
        // Quiz data with category-specific recommendations
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
                explanation: "Adult cats should have at least one veterinary check-up per year. Senior cats or those with health issues may need twice-yearly visits.",
                category: "Health"
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
                explanation: "Start by confining your new cat to one room with all their essentials, then gradually introduce them to other areas of your home.",
                category: "Behavior"
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
                explanation: "Cats need about 3.5-4.5 ounces of water per 5 pounds of body weight per day, which can come from both drinking water and their food.",
                category: "Nutrition"
            }
        ];

        // Instagram accounts by category
        const instagramAccounts = {
            "Health": [
                { name: "CatVet", handle: "@catvet", url: "https://www.instagram.com/catvet/", followers: "142K" },
                { name: "TheCatDoctor", handle: "@thecatdoctor", url: "https://www.instagram.com/thecatdoctor/", followers: "89K" }
            ],
            "Behavior": [
                { name: "JacksonGalaxy", handle: "@jacksongalaxy", url: "https://www.instagram.com/jacksongalaxy/", followers: "1.2M" },
                { name: "CatBehaviorist", handle: "@catbehaviorist", url: "https://www.instagram.com/catbehaviorist/", followers: "56K" }
            ],
            "Nutrition": [
                { name: "CatNutrition", handle: "@catnutrition", url: "https://www.instagram.com/catnutrition/", followers: "215K" },
                { name: "RawFedCats", handle: "@rawfedcats", url: "https://www.instagram.com/rawfedcats/", followers: "78K" }
            ],
            "default": [
                { name: "CatsOfInstagram", handle: "@catsofinstagram", url: "https://www.instagram.com/catsofinstagram/", followers: "8.5M" },
                { name: "MiffyOfficial", handle: "@miffyofficial", url: "https://www.instagram.com/miffyofficial/", followers: "320K" }
            ]
        };

        // Quiz functionality
        document.getElementById('startQuizBtn').addEventListener('click', function() {
            this.classList.add('hidden');
            document.getElementById('quizContainer').classList.remove('hidden');
            loadQuestion(0);
        });

        let currentQuestion = 0;
        let score = 0;
        let userWeakCategories = new Set();

        function loadQuestion(index) {
            const question = quizQuestions[index];
            document.getElementById('quizQuestion').textContent = question.question;

            const optionsContainer = document.getElementById('quizOptions');
            optionsContainer.innerHTML = '';

            question.options.forEach((option, i) => {
                const optionElement = document.createElement('button');
                optionElement.className = 'w-full text-left p-3 rounded bg-miffy-peach hover:bg-miffy-pink hover:text-white transition text-miffy-brown';
                optionElement.textContent = option;
                optionElement.addEventListener('click', () => selectAnswer(i, question));
                optionsContainer.appendChild(optionElement);
            });

            document.getElementById('quizProgress').textContent = `${index + 1} of ${quizQuestions.length}`;
            document.getElementById('nextQuestionBtn').classList.add('hidden');
        }

        function selectAnswer(selectedIndex, question) {
            const options = document.querySelectorAll('#quizOptions button');

            // Disable all options
            options.forEach(option => {
                option.disabled = true;
            });

            // Highlight correct answer in green
            options[question.correct].classList.add('bg-green-100', 'text-green-800', 'font-bold');

            // Check if answer was correct
            if (selectedIndex === question.correct) {
                score++;
                // Show feedback for correct answer
                options[selectedIndex].classList.add('bg-green-100', 'text-green-800');
                options[selectedIndex].innerHTML += ' <span class="ml-2">✓ Correct!</span>';
            } else {
                userWeakCategories.add(question.category);
                // Highlight wrong answer in red
                options[selectedIndex].classList.add('bg-red-100', 'text-red-800');
                options[selectedIndex].innerHTML += ' <span class="ml-2">✗ Incorrect</span>';

                // Show explanation
                const explanation = document.createElement('div');
                explanation.className = 'mt-3 p-3 bg-blue-50 text-blue-800 rounded-lg';
                explanation.innerHTML = `<strong>Explanation:</strong> ${question.explanation}`;
                document.getElementById('quizOptions').appendChild(explanation);
            }

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

            // Display score
            const scorePercentage = Math.round((score / quizQuestions.length) * 100);
            document.getElementById('quizScore').textContent = `You scored ${score}/${quizQuestions.length} (${scorePercentage}%)!`;

            // Display recommendations
            const recommendationContent = document.getElementById('recommendationContent');
            recommendationContent.innerHTML = '';

            if (score === quizQuestions.length) {
                recommendationContent.innerHTML += `
                    <div class="flex items-start bg-white p-4 rounded-lg border border-miffy-brown">
                        <div class="bg-green-100 p-2 rounded-full mr-3">
                            <svg class="w-6 h-6 text-green-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-miffy-brown">Purrfect! You're a cat care expert!</p>
                            <p class="text-sm text-gray-600">Check out our advanced guides to learn even more.</p>
                        </div>
                    </div>
                `;
            } else if (score >= quizQuestions.length / 2) {
                recommendationContent.innerHTML += `
                    <div class="flex items-start bg-white p-4 rounded-lg border border-miffy-brown">
                        <div class="bg-blue-100 p-2 rounded-full mr-3">
                            <svg class="w-6 h-6 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-miffy-brown">Good job! You know quite a bit about cat care.</p>
                            <p class="text-sm text-gray-600">Here are some areas you might want to improve:</p>
                            <ul class="list-disc pl-5 mt-2 text-sm text-gray-600">
                                ${Array.from(userWeakCategories).map(cat => `<li>${cat}</li>`).join('')}
                            </ul>
                        </div>
                    </div>
                `;
            } else {
                recommendationContent.innerHTML += `
                    <div class="flex items-start bg-white p-4 rounded-lg border border-miffy-brown">
                        <div class="bg-yellow-100 p-2 rounded-full mr-3">
                            <svg class="w-6 h-6 text-yellow-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-miffy-brown">Don't worry! Every cat parent starts somewhere.</p>
                            <p class="text-sm text-gray-600">We recommend focusing on these areas:</p>
                            <ul class="list-disc pl-5 mt-2 text-sm text-gray-600">
                                ${Array.from(userWeakCategories).map(cat => `<li>${cat}</li>`).join('')}
                            </ul>
                        </div>
                    </div>
                `;
            }

            // Add guide recommendations
            recommendationContent.innerHTML += `
                <div class="mt-4 text-center">
                    <a href="/care-guides${userWeakCategories.size > 0 ? '?category=' + Array.from(userWeakCategories)[0] : ''}"
                       class="miffy-button inline-block px-6 py-2">
                        View Recommended Guides
                    </a>
                </div>
            `;

            // Display Instagram recommendations
            const instagramContainer = document.getElementById('instagramAccounts');
            instagramContainer.innerHTML = '';

            // Get accounts for weak categories or default
            let accountsToShow = [];
            if (userWeakCategories.size > 0) {
                Array.from(userWeakCategories).forEach(cat => {
                    if (instagramAccounts[cat]) {
                        accountsToShow = accountsToShow.concat(instagramAccounts[cat]);
                    }
                });
            }

            if (accountsToShow.length === 0) {
                accountsToShow = instagramAccounts['default'];
            }

            // Display up to 4 accounts
            accountsToShow.slice(0, 4).forEach(account => {
                const accountElement = document.createElement('div');
                accountElement.className = 'text-center bg-white p-4 rounded-lg border border-miffy-brown hover:bg-miffy-peach transition';
                accountElement.innerHTML = `
                    <div class="w-16 h-16 bg-miffy-pink rounded-full mx-auto mb-2 flex items-center justify-center text-white text-2xl">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h5 class="font-bold text-miffy-brown">${account.name}</h5>
                    <p class="text-sm text-gray-600 mb-1">${account.handle}</p>
                    <p class="text-xs text-miffy-pink">${account.followers} followers</p>
                    <a href="${account.url}" target="_blank" class="text-xs text-blue-500 hover:underline mt-1 block">Follow</a>
                `;
                instagramContainer.appendChild(accountElement);
            });
        }

        // Add Font Awesome for Instagram icons
        document.addEventListener('DOMContentLoaded', function() {
            const faScript = document.createElement('script');
            faScript.src = 'https://kit.fontawesome.com/a076d05399.js';
            faScript.crossOrigin = 'anonymous';
            document.head.appendChild(faScript);
        });
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
            color: #db9d9d;
            border-radius: 9999px;
            transition: all 0.3s ease;
            border: 2px solid var(--miffy-brown);
            font-weight: bold;
        }
        .miffy-button:hover {
            background-color: var(--miffy-brown);
            color:#F5C3C3;
            transform: scale(1.05);
        }
        /* Ensure text is visible on buttons */
        .bg-miffy-pink {
            color: #F5C3C3;
        }
        .bg-miffy-pink:hover {
            color: #F5C3C3;
        }
    </style>
@endsection
