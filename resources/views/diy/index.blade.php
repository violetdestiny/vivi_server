@extends('layouts.app')

@section('title', 'DIY Cat Toys')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-miffy-pink to-miffy-peach rounded-xl p-8 mb-12 text-center">
            <h1 class="text-4xl font-bold text-miffy-brown mb-4">DIY Cat Toys</h1>
            <p class="text-xl text-miffy-dark-peach mb-6">Create fun, safe, and budget-friendly toys for your feline friends!</p>
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
                    <img src="{{ asset('images/miffy/miffy-cats3.jpg') }}" alt="Cardboard Maze" class="w-full h-48 object-cover">
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

            <!-- Toy 2: Feather Wand -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="cat">
                <div class="relative">
                    <img src="{{ asset('images/miffy/miffy-cat-bg.jpg') }}" alt="Feather Wand" class="w-full h-48 object-cover">
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

            <!-- Toy 3: Catnip Sock -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="cat">
                <div class="relative">
                    <img src="{{ asset('images/miffy/miffy-eating.jpg') }}" alt="Catnip Sock" class="w-full h-48 object-cover">
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

            <!-- Toy 4: Scratching Post -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="cat">
                <div class="relative">
                    <img src="{{ asset('images/miffy/miffy-kitten.jpg') }}" alt="Scratching Post" class="w-full h-48 object-cover">
                    <span class="difficulty-badge bg-red-500">Advanced</span>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-miffy-brown mb-2">DIY Scratching Post</h2>
                    <p class="text-gray-700 mb-4">A sturdy scratching post covered with sisal rope.</p>

                    <div class="mb-4">
                        <h3 class="font-semibold text-miffy-brown">Materials:</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600">
                            <li>Wooden base</li>
                            <li>Wooden post</li>
                            <li>Sisal rope</li>
                            <li>Staple gun</li>
                        </ul>
                    </div>

                    <button class="view-tutorial-btn" data-toy="scratch">View Tutorial</button>
                </div>
            </div>

            <!-- Toy 5: Puzzle Box -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="cat">
                <div class="relative">
                    <img src="{{ asset('images/miffy/miffy-cats2.png') }}" alt="Puzzle Box" class="w-full h-48 object-cover">
                    <span class="difficulty-badge bg-yellow-500">Medium</span>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-miffy-brown mb-2">Treat Puzzle Box</h2>
                    <p class="text-gray-700 mb-4">Mental stimulation toy that dispenses treats.</p>

                    <div class="mb-4">
                        <h3 class="font-semibold text-miffy-brown">Materials:</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600">
                            <li>Small cardboard box</li>
                            <li>Toilet paper rolls</li>
                            <li>Scissors</li>
                            <li>Cat treats</li>
                        </ul>
                    </div>

                    <button class="view-tutorial-btn" data-toy="puzzle">View Tutorial</button>
                </div>
            </div>

            <!-- Toy 6: Cat Tent -->
            <div class="toy-card bg-white rounded-xl overflow-hidden shadow-lg border border-miffy-brown" data-pet="cat">
                <div class="relative">
                    <img src="{{ asset('images/miffy/curios.jpg') }}" alt="Cat Tent" class="w-full h-48 object-cover">
                    <span class="difficulty-badge bg-yellow-500">Medium</span>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-miffy-brown mb-2">T-Shirt Cat Tent</h2>
                    <p class="text-gray-700 mb-4">Cozy hideaway made from an old t-shirt.</p>

                    <div class="mb-4">
                        <h3 class="font-semibold text-miffy-brown">Materials:</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600">
                            <li>Large t-shirt</li>
                            <li>Wire hanger or cardboard</li>
                            <li>Safety pins</li>
                            <li>Small pillow</li>
                        </ul>
                    </div>

                    <button class="view-tutorial-btn" data-toy="tent">View Tutorial</button>
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
                            <img src="{{ asset('images/miffy/cozy.jpg') }}" class="w-8 h-8 mr-3">
                            <span class="font-medium text-gray-800">Fabric (T-shirts, socks)</span>
                        </div>

                        <!-- Cardboard Option -->
                        <div class="material-option flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-miffy-pink transition" data-material="cardboard">
                            <div class="material-checkbox w-5 h-5 border-2 border-miffy-brown rounded-sm mr-3 flex items-center justify-center">
                                <svg class="check-icon hidden w-4 h-4 text-miffy-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <img src="{{ asset('images/miffy/miffy-cats2.png') }}" class="w-8 h-8 mr-3">
                            <span class="font-medium text-gray-800">Cardboard/Paper</span>
                        </div>

                        <!-- Wood Option -->
                        <div class="material-option flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-miffy-pink transition" data-material="wood">
                            <div class="material-checkbox w-5 h-5 border-2 border-miffy-brown rounded-sm mr-3 flex items-center justify-center">
                                <svg class="check-icon hidden w-4 h-4 text-miffy-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <img src="{{ asset('images/miffy/miffy-cats1.png') }}" class="w-8 h-8 mr-3">
                            <span class="font-medium text-gray-800">Wood</span>
                        </div>

                        <!-- Yarn Option -->
                        <div class="material-option flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-miffy-pink transition" data-material="yarn">
                            <div class="material-checkbox w-5 h-5 border-2 border-miffy-brown rounded-sm mr-3 flex items-center justify-center">
                                <svg class="check-icon hidden w-4 h-4 text-miffy-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <img src="{{ asset('images/miffy/miffy-character.png') }}" class="w-8 h-8 mr-3">
                            <span class="font-medium text-gray-800">Yarn/String</span>
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
                    <button id="generate-btn" class="mt-4 w-full bg-[#FFB6C1] text-pink-400 py-3 px-6 rounded-full font-semibold hover:bg-[#FF69B4] transition flex items-center justify-center">
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
            <div class="bg-pink-200 rounded-xl p-8 max-w-2xl w-full max-h-screen overflow-y-auto">
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
            @apply w-full bg-miffy-brown to-pink-300 py-2 px-4 rounded-lg font-medium hover:bg-brown-700 transition;
        }
        .text-miffy-dark-peach {
            color: #ff9aa2;
        }
    </style>

    <script>
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
            } else if (materials.includes('fabric') && materials.includes('yarn')) {
                preview.innerHTML = `
                <div class="text-center">
                    <h4 class="font-bold text-lg mb-2 text-miffy-brown">Fabric and Yarn Cat Teaser</h4>
                    <p class="mb-3 text-gray-700">Create an interactive teaser toy with fabric and yarn!</p>
                    <ul class="text-sm text-left list-disc list-inside space-y-1">
                        <li>Cut fabric into small strips</li>
                        <li>Tie yarn around a wooden stick</li>
                        <li>Attach fabric strips to the yarn ends</li>
                    </ul>
                </div>
            `;
            } else if (materials.includes('fabric')) {
                preview.innerHTML = `
                <div class="text-center">
                    <h4 class="font-bold text-lg mb-2 text-miffy-brown">Fabric Catnip Toy</h4>
                    <p class="mb-3 text-gray-700">Make a simple catnip-filled fabric toy!</p>
                    <ul class="text-sm text-left list-disc list-inside space-y-1">
                        <li>Cut two identical fabric shapes</li>
                        <li>Sew together leaving small opening</li>
                        <li>Fill with catnip and stuffing</li>
                        <li>Sew opening closed</li>
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
            } else if (materials.includes('wood')) {
                preview.innerHTML = `
                <div class="text-center">
                    <h4 class="font-bold text-lg mb-2 text-miffy-brown">Wooden Scratching Post</h4>
                    <p class="mb-3 text-gray-700">Build a sturdy scratching surface for your cat!</p>
                    <ul class="text-sm text-left list-disc list-inside space-y-1">
                        <li>Sand a wooden post smooth</li>
                        <li>Attach to a sturdy base</li>
                        <li>Wrap with sisal rope (if available)</li>
                    </ul>
                </div>
            `;
            } else {
                preview.innerHTML = `
                <div class="text-center">
                    <h4 class="font-bold text-lg mb-2 text-miffy-brown">Custom Cat Toy</h4>
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
                        <li>Supervise your cat during initial play</li>
                        <li>Replace if it becomes too damaged</li>
                    </ul>
                </div>
            `
            },
            wand: {
                title: "Feather Wand Tutorial",
                content: `
                <h3 class="font-bold text-xl mb-3 text-miffy-brown">Step-by-Step Instructions</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Cut a length of string or elastic cord (about 18-24 inches)</li>
                    <li>Tie one end securely to the wooden dowel</li>
                    <li>Attach feathers to the other end of the string</li>
                    <li>Optionally add small bells for sound stimulation</li>
                    <li>Test the wand to ensure all attachments are secure</li>
                </ol>
                <div class="mt-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                    <h4 class="font-bold mb-2 text-miffy-brown">Play Tips</h4>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        <li>Mimic prey movements (quick, erratic motions)</li>
                        <li>Let your cat "catch" the toy occasionally</li>
                        <li>Store out of reach when not in use</li>
                    </ul>
                </div>
            `
            },
            sock: {
                title: "Catnip Sock Toy Tutorial",
                content: `
                <h3 class="font-bold text-xl mb-3 text-miffy-brown">Step-by-Step Instructions</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Take a clean sock (preferably one without holes)</li>
                    <li>Fill the toe section with about 2 tablespoons of dried catnip</li>
                    <li>Add some stuffing or crumpled paper to give it shape</li>
                    <li>Tie a knot at the top to secure the contents</li>
                    <li>For extra appeal, tie the sock in the middle to create two sections</li>
                </ol>
                <div class="mt-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                    <h4 class="font-bold mb-2 text-miffy-brown">Variations</h4>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        <li>Use different colored socks for visual interest</li>
                        <li>Add crinkly materials inside for sound</li>
                        <li>Refresh with new catnip every few weeks</li>
                    </ul>
                </div>
            `
            },
            scratch: {
                title: "Scratching Post Tutorial",
                content: `
                <h3 class="font-bold text-xl mb-3 text-miffy-brown">Step-by-Step Instructions</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Cut a wooden base (at least 16" square for stability)</li>
                    <li>Attach a 4x4 wooden post (height depends on your cat's size)</li>
                    <li>Starting at the bottom, wrap sisal rope tightly around the post</li>
                    <li>Secure with staples or nails every few inches</li>
                    <li>Continue wrapping to the top and secure the end</li>
                    <li>Sand any rough edges</li>
                </ol>
                <div class="mt-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                    <h4 class="font-bold mb-2 text-miffy-brown">Placement Tips</h4>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        <li>Place near where your cat already likes to scratch</li>
                        <li>Make it tall enough for full stretching</li>
                        <li>Consider placing near sleeping areas</li>
                    </ul>
                </div>
            `
            },
            puzzle: {
                title: "Treat Puzzle Box Tutorial",
                content: `
                <h3 class="font-bold text-xl mb-3 text-miffy-brown">Step-by-Step Instructions</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Take a small cardboard box (shoe box size works well)</li>
                    <li>Cut holes in the sides large enough for paws</li>
                    <li>Insert toilet paper rolls at different angles</li>
                    <li>Secure rolls with tape or glue</li>
                    <li>Place treats inside the rolls and box</li>
                    <li>Close the box loosely so your cat can open it</li>
                </ol>
                <div class="mt-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                    <h4 class="font-bold mb-2 text-miffy-brown">Engagement Tips</h4>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        <li>Start with easy-to-reach treats</li>
                        <li>Gradually make it more challenging</li>
                        <li>Rotate different puzzle designs</li>
                    </ul>
                </div>
            `
            },
            tent: {
                title: "T-Shirt Cat Tent Tutorial",
                content: `
                <h3 class="font-bold text-xl mb-3 text-miffy-brown">Step-by-Step Instructions</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Bend a wire hanger into a circle or cut cardboard into an arch</li>
                    <li>Place the hanger or cardboard arch inside a large t-shirt</li>
                    <li>Position the neck hole as the entrance</li>
                    <li>Use safety pins to secure the shirt to the frame</li>
                    <li>Place a small pillow or blanket inside for comfort</li>
                    <li>Tuck the sleeves inside or use them as extra padding</li>
                </ol>
                <div class="mt-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                    <h4 class="font-bold mb-2 text-miffy-brown">Encouraging Use</h4>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        <li>Place familiar-smelling items inside initially</li>
                        <li>Position in a quiet corner</li>
                        <li>Toss treats inside to encourage exploration</li>
                    </ul>
                </div>
            `
            }
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
