@extends('layouts.app')

@section('title', 'DIY Pet Toys')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-miffy-pink to-miffy-peach rounded-xl p-8 mb-12 text-center">
            <h1 class="text-4xl font-bold text-miffy-brown mb-4">DIY Pet Toys</h1>
            <p class="text-xl text-miffy-dark-peach mb-6">Create fun, safe, and budget-friendly toys for your furry friends!</p>
            <div class="flex justify-center space-x-4">
                <button id="filter-all" class="filter-btn active" data-filter="all">All Toys</button>
                <button id="filter-cats" class="filter-btn" data-filter="cat">For Cats</button>
                <button id="filter-dogs" class="filter-btn" data-filter="dog">For Dogs</button>
                <button id="filter-birds" class="filter-btn" data-filter="bird">For Birds</button>
            </div>
        </div>

        <!-- Difficulty Level Guide -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-12">
            <h2 class="text-2xl font-bold text-miffy-brown mb-4">Difficulty Guide</h2>
            <div class="grid grid-cols-3 gap-4">
                <div class="flex items-center">
                    <span class="w-4 h-4 rounded-full bg-green-500 mr-2"></span>
                    <span class="text-gray-800">Easy (30 mins)</span>
                </div>
                <div class="flex items-center">
                    <span class="w-4 h-4 rounded-full bg-yellow-500 mr-2"></span>
                    <span class="text-gray-800">Medium (1 hour)</span>
                </div>
                <div class="flex items-center">
                    <span class="w-4 h-4 rounded-full bg-red-500 mr-2"></span>
                    <span class="text-gray-800">Advanced (2+ hours)</span>
                </div>
            </div>
        </div>

        <!-- DIY Toy Tutorials -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12" id="toy-container">
            <!-- Toy 1: Cardboard Maze -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="cat">
                <div class="relative">
                    <img src="{{ asset('images/diy/cardboard-maze.jpg') }}" alt="Cardboard Maze" class="w-full h-48 object-cover">
                    <span class="difficulty-badge bg-green-500">Easy</span>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-miffy-brown mb-2">Cardboard Maze</h2>
                    <p class="text-gray-700 mb-4">A fun maze for cats to explore made from recycled boxes.</p>

                    <div class="mb-4">
                        <h3 class="font-semibold text-miffy-brown">Materials:</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600">
                            <li>3-5 cardboard boxes</li>
                            <li>Non-toxic glue</li>
                            <li>Scissors/box cutter</li>
                        </ul>
                    </div>

                    <button class="view-tutorial-btn" data-toy="maze">View Tutorial</button>
                </div>
            </div>

            <!-- Toy 2: Braided T-Shirt Rope -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="dog">
                <div class="relative">
                    <img src="{{ asset('images/diy/braided-rope.jpg') }}" alt="Braided T-Shirt Rope" class="w-full h-48 object-cover">
                    <span class="difficulty-badge bg-green-500">Easy</span>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-miffy-brown mb-2">Braided T-Shirt Rope</h2>
                    <p class="text-gray-700 mb-4">A durable tug toy made from old t-shirts.</p>

                    <div class="mb-4">
                        <h3 class="font-semibold text-miffy-brown">Materials:</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600">
                            <li>3 old t-shirts</li>
                            <li>Scissors</li>
                        </ul>
                    </div>

                    <button class="view-tutorial-btn" data-toy="rope">View Tutorial</button>
                </div>
            </div>

            <!-- Toy 3: Feather Wand -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="cat">
                <div class="relative">
                    <img src="{{ asset('images/diy/feather-wand.jpg') }}" alt="Feather Wand" class="w-full h-48 object-cover">
                    <span class="difficulty-badge bg-yellow-500">Medium</span>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-miffy-brown mb-2">Feather Wand</h2>
                    <p class="text-gray-700 mb-4">Interactive wand toy to stimulate your cat's hunting instinct.</p>

                    <div class="mb-4">
                        <h3 class="font-semibold text-miffy-brown">Materials:</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600">
                            <li>Wooden dowel (12-18")</li>
                            <li>String or elastic cord</li>
                            <li>Feathers</li>
                            <li>Bells (optional)</li>
                        </ul>
                    </div>

                    <button class="view-tutorial-btn" data-toy="wand">View Tutorial</button>
                </div>
            </div>

            <!-- Toy 4: Puzzle Feeder -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="dog">
                <div class="relative">
                    <img src="{{ asset('images/diy/puzzle-feeder.jpg') }}" alt="Puzzle Feeder" class="w-full h-48 object-cover">
                    <span class="difficulty-badge bg-red-500">Advanced</span>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-miffy-brown mb-2">Puzzle Feeder</h2>
                    <p class="text-gray-700 mb-4">Mental stimulation toy that dispenses treats.</p>

                    <div class="mb-4">
                        <h3 class="font-semibold text-miffy-brown">Materials:</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600">
                            <li>Plastic bottle with lid</li>
                            <li>Wooden base</li>
                            <li>Nails/screws</li>
                            <li>Drill</li>
                        </ul>
                    </div>

                    <button class="view-tutorial-btn" data-toy="feeder">View Tutorial</button>
                </div>
            </div>

            <!-- Toy 5: Bird Perch -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="bird">
                <div class="relative">
                    <img src="{{ asset('images/diy/bird-perch.jpg') }}" alt="Bird Perch" class="w-full h-48 object-cover">
                    <span class="difficulty-badge bg-yellow-500">Medium</span>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-miffy-brown mb-2">Natural Wood Perch</h2>
                    <p class="text-gray-700 mb-4">Safe chewing and climbing surface for birds.</p>

                    <div class="mb-4">
                        <h3 class="font-semibold text-miffy-brown">Materials:</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600">
                            <li>Untreated wood branches</li>
                            <li>Bird-safe rope</li>
                            <li>Drill</li>
                        </ul>
                    </div>

                    <button class="view-tutorial-btn" data-toy="perch">View Tutorial</button>
                </div>
            </div>

            <!-- Toy 6: Catnip Sock -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="cat">
                <div class="relative">
                    <img src="{{ asset('images/diy/catnip-sock.jpg') }}" alt="Catnip Sock" class="w-full h-48 object-cover">
                    <span class="difficulty-badge bg-green-500">Easy</span>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-miffy-brown mb-2">Catnip Sock Toy</h2>
                    <p class="text-gray-700 mb-4">Simple toy that drives cats crazy (in a good way).</p>

                    <div class="mb-4">
                        <h3 class="font-semibold text-miffy-brown">Materials:</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600">
                            <li>Old sock</li>
                            <li>Dried catnip</li>
                            <li>Stuffing (optional)</li>
                        </ul>
                    </div>

                    <button class="view-tutorial-btn" data-toy="sock">View Tutorial</button>
                </div>
            </div>
        </div>

        <!-- Special Feature: Toy Builder -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-12 border-2 border-miffy-brown">
            <h2 class="text-3xl font-bold text-center text-miffy-brown mb-6">Custom Toy Builder</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-miffy-brown">Choose Your Materials</h3>
                    <div class="space-y-3">
                        <!-- Fabric Option -->
                        <div class="material-option flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-miffy-pink transition" data-material="fabric">
                            <div class="material-checkbox w-5 h-5 border-2 border-miffy-brown rounded-sm mr-3 flex items-center justify-center">
                                <svg class="check-icon hidden w-4 h-4 text-miffy-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <img src="{{ asset('images/diy/fabric-icon.png') }}" class="w-8 h-8 mr-3">
                            <span class="font-medium text-gray-800">Fabric (T-shirts, socks)</span>
                        </div>

                        <!-- Cardboard Option -->
                        <div class="material-option flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-miffy-pink transition" data-material="cardboard">
                            <div class="material-checkbox w-5 h-5 border-2 border-miffy-brown rounded-sm mr-3 flex items-center justify-center">
                                <svg class="check-icon hidden w-4 h-4 text-miffy-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <img src="{{ asset('images/diy/cardboard-icon.png') }}" class="w-8 h-8 mr-3">
                            <span class="font-medium text-gray-800">Cardboard/Paper</span>
                        </div>

                        <!-- Wood Option -->
                        <div class="material-option flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-miffy-pink transition" data-material="wood">
                            <div class="material-checkbox w-5 h-5 border-2 border-miffy-brown rounded-sm mr-3 flex items-center justify-center">
                                <svg class="check-icon hidden w-4 h-4 text-miffy-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <img src="{{ asset('images/diy/wood-icon.png') }}" class="w-8 h-8 mr-3">
                            <span class="font-medium text-gray-800">Wood</span>
                        </div>

                        <!-- Plastic Option -->
                        <div class="material-option flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-miffy-pink transition" data-material="plastic">
                            <div class="material-checkbox w-5 h-5 border-2 border-miffy-brown rounded-sm mr-3 flex items-center justify-center">
                                <svg class="check-icon hidden w-4 h-4 text-miffy-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <img src="{{ asset('images/diy/plastic-icon.png') }}" class="w-8 h-8 mr-3">
                            <span class="font-medium text-gray-800">Plastic Bottles</span>
                        </div>
                    </div>

                    <p class="mt-4 text-sm text-gray-600 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Click materials you have available
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4 text-miffy-brown">Your Custom Toy</h3>
                    <div id="toy-preview" class="bg-miffy-peach bg-opacity-10 rounded-lg p-6 min-h-48 flex items-center justify-center border border-dashed border-miffy-pink">
                        <p class="text-center text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto mb-2 text-miffy-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            Select materials to see custom toy ideas
                        </p>
                    </div>
                    <button id="generate-btn" class="mt-4 w-full bg-miffy-pink text-white py-3 px-6 rounded-full font-semibold hover:bg-pink-600 transition flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Generate Toy Idea
                    </button>
                </div>
            </div>
        </div>

        <!-- Tutorial Modal -->
        <div id="tutorial-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <div class="bg-white rounded-xl p-8 max-w-2xl w-full max-h-screen overflow-y-auto">
                <div class="flex justify-between items-center mb-6">
                    <h2 id="modal-title" class="text-2xl font-bold text-miffy-brown"></h2>
                    <button id="close-modal" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div id="modal-content" class="prose">
                    <!-- Tutorial content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <style>
        .filter-btn {
            @apply px-4 py-2 rounded-full text-white font-semibold bg-opacity-80 transition;
        }
        .filter-btn.active {
            @apply bg-white text-miffy-pink bg-opacity-100 shadow-md;
        }
        .difficulty-badge {
            @apply absolute top-2 right-2 text-white text-xs font-bold px-2 py-1 rounded-full;
        }
        .toy-card {
            transition: transform 0.3s ease;
        }
        .toy-card:hover {
            transform: translateY(-5px);
        }
        .view-tutorial-btn {
            @apply w-full bg-miffy-brown text-white py-2 px-4 rounded-lg font-medium hover:bg-brown-700 transition;
        }
        .text-miffy-dark-peach {
            color: #ff9aa2;
        }
    </style>

    <script>
        // Filter toys by pet type
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filter = this.dataset.filter;
                document.querySelectorAll('.toy-card').forEach(card => {
                    if (filter === 'all' || card.dataset.pet === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Material Selection
        document.querySelectorAll('.material-option').forEach(option => {
            option.addEventListener('click', function() {
                const checkbox = this.querySelector('.material-checkbox');
                const checkIcon = this.querySelector('.check-icon');

                checkbox.classList.toggle('bg-miffy-peach');
                checkIcon.classList.toggle('hidden');
                this.classList.toggle('border-miffy-pink');
                this.classList.toggle('bg-miffy-peach');
                this.classList.toggle('bg-opacity-20');
            });
        });

        // Toy Builder Generator
        document.getElementById('generate-btn').addEventListener('click', function() {
            const selected = document.querySelectorAll('.material-option .check-icon:not(.hidden)');
            if (selected.length === 0) {
                alert('Please select at least one material');
                return;
            }

            const materials = Array.from(selected).map(el =>
                el.closest('.material-option').dataset.material
            );
            const preview = document.getElementById('toy-preview');

            if (materials.includes('fabric') && materials.includes('cardboard')) {
                preview.innerHTML = `
                <div class="text-center">
                    <h4 class="font-bold text-lg mb-2 text-miffy-brown">Fabric-Covered Cardboard Scratcher</h4>
                    <p class="mb-3 text-gray-700">Wrap cardboard with fabric to create a durable scratching surface!</p>
                    <ul class="text-sm text-left list-disc list-inside space-y-1">
                        <li>Cut cardboard into desired shape</li>
                        <li>Wrap tightly with fabric</li>
                        <li>Secure with non-toxic glue</li>
                    </ul>
                </div>
            `;
            } else if (materials.includes('fabric')) {
                preview.innerHTML = `
                <div class="text-center">
                    <h4 class="font-bold text-lg mb-2 text-miffy-brown">Braided Tug Toy</h4>
                    <p class="mb-3 text-gray-700">Cut fabric into strips and braid for a durable tug toy!</p>
                    <ul class="text-sm text-left list-disc list-inside space-y-1">
                        <li>Cut 3 strips of fabric (2-3" wide)</li>
                        <li>Braid tightly together</li>
                        <li>Tie knots at each end</li>
                    </ul>
                </div>
            `;
            } else if (materials.includes('cardboard')) {
                preview.innerHTML = `
                <div class="text-center">
                    <h4 class="font-bold text-lg mb-2 text-miffy-brown">Cardboard Puzzle Box</h4>
                    <p class="mb-3 text-gray-700">Create compartments in a box and hide treats inside!</p>
                    <ul class="text-sm text-left list-disc list-inside space-y-1">
                        <li>Cut flaps in a cardboard box</li>
                        <li>Create interior walls</li>
                        <li>Hide treats in compartments</li>
                    </ul>
                </div>
            `;
            } else {
                preview.innerHTML = `
                <div class="text-center">
                    <h4 class="font-bold text-lg mb-2 text-miffy-brown">Custom Toy Combination</h4>
                    <p class="text-gray-700">Combine your selected materials to create a unique toy!</p>
                    <p class="text-sm mt-2 text-gray-600">Check our tutorials for inspiration on how to combine these materials safely.</p>
                </div>
            `;
            }
        });

        // Tutorial Modal
        const tutorials = {
            maze: {
                title: "Cardboard Maze Tutorial",
                content: `
                <h3 class="font-bold text-xl mb-3 text-miffy-brown">Step-by-Step Instructions</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Collect 3-5 cardboard boxes of varying sizes</li>
                    <li>Cut entry and exit holes in each box (large enough for your cat to enter)</li>
                    <li>Arrange boxes in an interesting configuration</li>
                    <li>Secure boxes together with non-toxic glue</li>
                    <li>Add smaller holes between boxes to create pathways</li>
                    <li>Place treats inside to encourage exploration</li>
                </ol>
                <div class="mt-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                    <h4 class="font-bold mb-2 text-miffy-brown">Safety Tips</h4>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        <li>Ensure all edges are smooth to prevent cuts</li>
                        <li>Supervise your pet during initial play</li>
                        <li>Replace if it becomes too damaged</li>
                    </ul>
                </div>
            `
            },
            rope: {
                title: "Braided T-Shirt Rope Tutorial",
                content: `
                <h3 class="font-bold text-xl mb-3 text-miffy-brown">Step-by-Step Instructions</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Cut 3 t-shirts into strips (about 2" wide)</li>
                    <li>Gather 3 strips together and tie a knot at one end</li>
                    <li>Braid the strips tightly</li>
                    <li>Tie another knot at the other end</li>
                    <li>For extra durability, you can braid multiple braids together</li>
                </ol>
                <div class="mt-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                    <h4 class="font-bold mb-2 text-miffy-brown">Variations</h4>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        <li>Add knots along the length for chewing texture</li>
                        <li>Use different colored shirts for visual appeal</li>
                        <li>Make shorter versions for smaller dogs</li>
                    </ul>
                </div>
            `
            },
            // Add other tutorials similarly
        };

        document.querySelectorAll('.view-tutorial-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const toy = this.dataset.toy;
                const modal = document.getElementById('tutorial-modal');
                document.getElementById('modal-title').textContent = tutorials[toy].title;
                document.getElementById('modal-content').innerHTML = tutorials[toy].content;
                modal.classList.remove('hidden');
            });
        });

        document.getElementById('close-modal').addEventListener('click', function() {
            document.getElementById('tutorial-modal').classList.add('hidden');
        });
    </script>
@endsection
