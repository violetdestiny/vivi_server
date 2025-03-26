@extends('layouts.app')

@section('title', 'Adoption Application for ' . $cat->name)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-2xl font-bold mb-6">Adoption Application for {{ $cat->name }}</h1>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('adoption.apply.submit') }}" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <input type="hidden" name="cat_id" value="{{ $cat->id }}">

                <div class="mb-6">
                    <h2 class="text-xl font-semibold mb-4">Personal Information</h2>

                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="name" class="block text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email *</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="phone" class="block text-gray-700 mb-2">Phone *</label>
                            <input type="tel" id="phone" name="phone" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="address" class="block text-gray-700 mb-2">Street Address *</label>
                            <input type="text" id="address" name="address" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-4">
                        <div>
                            <label for="city" class="block text-gray-700 mb-2">City *</label>
                            <input type="text" id="city" name="city" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="state" class="block text-gray-700 mb-2">State *</label>
                            <input type="text" id="state" name="state" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="zip_code" class="block text-gray-700 mb-2">ZIP Code *</label>
                            <input type="text" id="zip_code" name="zip_code" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h2 class="text-xl font-semibold mb-4">Adoption Questions</h2>

                    <div class="mb-4">
                        <label for="reason" class="block text-gray-700 mb-2">
                            Why do you want to adopt {{ $cat->name }}? (Minimum 20 characters) *
                        </label>
                        <textarea id="reason" name="reason" required minlength="20"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md h-32"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="experience" class="block text-gray-700 mb-2">
                            Tell us about your experience with pets (if any)
                        </label>
                        <textarea id="experience" name="experience"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md h-32"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Current Living Situation *</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="living_situation" value="apartment" required class="mr-2">
                                Apartment
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="living_situation" value="house" class="mr-2">
                                House
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="living_situation" value="condo" class="mr-2">
                                Condo
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="living_situation" value="other" class="mr-2">
                                Other
                            </label>
                        </div>
                    </div>

                    <div class="mb-4" id="landlord-permission" style="display: none;">
                        <label class="flex items-center">
                            <input type="checkbox" name="landlord_permission" value="1" class="mr-2">
                            I have permission from my landlord to have a pet
                        </label>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Do you have other pets? *</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="other_pets" value="1" required class="mr-2">
                                Yes
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="other_pets" value="0" class="mr-2">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="mb-4" id="pet-details" style="display: none;">
                        <label for="pet_details" class="block text-gray-700 mb-2">
                            Please tell us about your other pets (species, age, temperament)
                        </label>
                        <textarea id="pet_details" name="pet_details"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md h-24"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="vet_reference" class="block text-gray-700 mb-2">
                            Veterinary Reference (if available)
                        </label>
                        <textarea id="vet_reference" name="vet_reference"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md h-24"></textarea>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="signature" class="block text-gray-700 mb-2">
                        Full Name (as electronic signature) *
                    </label>
                    <input type="text" id="signature" name="signature" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <p class="text-sm text-gray-500 mt-1">
                        By entering your name, you certify that all information provided is accurate.
                    </p>
                </div>

                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded">
                    Submit Application
                </button>
            </form>
        </div>
    </div>

    <script>
        // Show/hide landlord permission based on living situation
        document.querySelectorAll('input[name="living_situation"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const landlordDiv = document.getElementById('landlord-permission');
                if (this.value === 'apartment' || this.value === 'condo') {
                    landlordDiv.style.display = 'block';
                } else {
                    landlordDiv.style.display = 'none';
                }
            });
        });

        // Show/hide pet details based on other pets selection
        document.querySelectorAll('input[name="other_pets"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const petDetailsDiv = document.getElementById('pet-details');
                if (this.value === '1') {
                    petDetailsDiv.style.display = 'block';
                } else {
                    petDetailsDiv.style.display = 'none';
                }
            });
        });
    </script>
@endsection
