<?php
namespace Database\Seeders;

use App\Models\CareGuide;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CareGuideSeeder extends Seeder
{
    public function run()
    {
        $guides = [
            [
                'title' => 'The Complete Guide to Kitten Care',
                'slug' => Str::slug('The Complete Guide to Kitten Care'),
                'content' => $this->kittenContent(),
                'image_path' => 'care-guides/kitten-care.jpg',
                'category' => 'Kitten Care',
            ],
            [
                'title' => 'Senior Cat Health Guide',
                'slug' => Str::slug('Senior Cat Health Guide'),
                'content' => $this->seniorContent(),
                'image_path' => 'care-guides/senior-cat.jpg',
                'category' => 'Senior Care',
            ],
            [
                'title' => 'Nutrition Essentials for Cats',
                'slug' => Str::slug('Nutrition Essentials for Cats'),
                'content' => $this->nutritionContent(),
                'image_path' => 'care-guides/cat-nutrition.jpg',
                'category' => 'Nutrition',
            ],
            [
                'title' => 'Grooming Your Cat Like a Pro',
                'slug' => Str::slug('Grooming Your Cat Like a Pro'),
                'content' => $this->groomingContent(),
                'image_path' => 'care-guides/cat-grooming.jpg',
                'category' => 'Grooming',
            ],
            [
                'title' => 'Behavioral Training for Cats',
                'slug' => Str::slug('Behavioral Training for Cats'),
                'content' => $this->behaviorContent(),
                'image_path' => 'care-guides/cat-behavior.jpg',
                'category' => 'Behavior',
            ],
            [
                'title' => 'Emergency Care for Cats',
                'slug' => Str::slug('Emergency Care for Cats'),
                'content' => $this->emergencyContent(),
                'image_path' => 'care-guides/cat-emergency.jpg',
                'category' => 'Health',
            ],
        ];

        foreach ($guides as $guide) {
            CareGuide::create($guide);
        }
    }

    private function kittenContent()
    {
        return '
            <div class="bg-blue-50 p-6 rounded-lg">
                <h2 class="text-2xl font-bold text-blue-800 mb-4">Essential Kitten Care</h2>
                <p class="mb-4">Kittens need specialized care for their first year. Here\'s what to know:</p>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="font-bold text-lg text-blue-700 mb-2">Feeding Schedule</h3>
                        <ul class="list-disc pl-6 space-y-1">
                            <li>0-4 weeks: Mother\'s milk or kitten formula</li>
                            <li>4-8 weeks: Wet food 4-5 times daily</li>
                            <li>8-12 weeks: 3-4 meals per day</li>
                            <li>3-6 months: 3 meals daily</li>
                            <li>6-12 months: 2 meals daily</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-blue-700 mb-2">Vaccination Timeline</h3>
                        <ul class="list-disc pl-6 space-y-1">
                            <li>6-8 weeks: First FVRCP vaccine</li>
                            <li>10-12 weeks: Second FVRCP + FeLV</li>
                            <li>14-16 weeks: Final FVRCP + rabies</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-4 rounded border border-blue-200 mb-6">
                    <h3 class="font-bold text-blue-700 mb-2">Socialization Tips</h3>
                    <p>Between 2-7 weeks is the critical socialization period. Expose your kitten to:</p>
                    <ul class="list-disc pl-6 mt-2 space-y-1">
                        <li>Different people (children, men, women)</li>
                        <li>Household noises (vacuum, TV, doorbell)</li>
                        <li>Gentle handling of paws, ears, and mouth</li>
                        <li>Other vaccinated pets</li>
                    </ul>
                </div>

                <div class="prose prose-blue max-w-none">
                    <h3 class="text-xl font-bold text-blue-800">Litter Training</h3>
                    <p>Most kittens learn from their mothers, but if yours needs help:</p>
                    <ol class="list-decimal pl-6">
                        <li>Choose a low-sided box for easy access</li>
                        <li>Place kitten in box after meals and naps</li>
                        <li>Use unscented, clumping litter</li>
                        <li>Clean accidents with enzyme cleaner</li>
                    </ol>
                </div>
            </div>
        ';
    }

    private function seniorContent()
    {
        return '
            <div class="bg-blue-50 p-6 rounded-lg">
                <h2 class="text-2xl font-bold text-blue-800 mb-4">Caring for Your Senior Cat</h2>
                <p class="mb-6">Cats are considered seniors at age 7-10. Here\'s how to keep them healthy and comfortable:</p>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="font-bold text-lg text-blue-700 mb-2">Common Health Issues</h3>
                        <ul class="list-disc pl-6 space-y-1">
                            <li>Kidney disease (increased thirst/urination)</li>
                            <li>Hyperthyroidism (weight loss despite appetite)</li>
                            <li>Arthritis (reluctance to jump)</li>
                            <li>Dental disease (bad breath, drooling)</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-blue-700 mb-2">Veterinary Care</h3>
                        <ul class="list-disc pl-6 space-y-1">
                            <li>Bi-annual checkups (vs annual for adults)</li>
                            <li>Blood work every 6-12 months</li>
                            <li>Blood pressure monitoring</li>
                            <li>Urinalysis to check kidney function</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-4 rounded border border-blue-200 mb-6">
                    <h3 class="font-bold text-blue-700 mb-2">Home Adjustments</h3>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold">Comfort</h4>
                            <ul class="list-disc pl-6 space-y-1">
                                <li>Orthopedic beds</li>
                                <li>Heated pads in winter</li>
                                <li>Ramps to favorite spots</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold">Accessibility</h4>
                            <ul class="list-disc pl-6 space-y-1">
                                <li>Low-sided litter boxes</li>
                                <li>Raised food/water bowls</li>
                                <li>Non-slip flooring</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="prose prose-blue max-w-none">
                    <h3 class="text-xl font-bold text-blue-800">Nutritional Needs</h3>
                    <p>Senior cats often benefit from:</p>
                    <ul class="list-disc pl-6">
                        <li>Higher protein (30-40% of calories)</li>
                        <li>Reduced phosphorus for kidney health</li>
                        <li>Increased omega-3s for joints</li>
                        <li>Wet food for hydration</li>
                    </ul>
                </div>
            </div>
        ';
    }

    // Additional content methods for other guides...
    private function nutritionContent()
    {
        return '
            <div class="bg-blue-50 p-6 rounded-lg">
                <h2 class="text-2xl font-bold text-blue-800 mb-4">Feline Nutrition Essentials</h2>
                <p class="mb-6">Proper nutrition is the foundation of your cat\'s health. Learn how to choose the best food.</p>

                <!-- More content would go here -->
            </div>
        ';
    }

    // Similar methods for groomingContent(), behaviorContent(), emergencyContent()
}
