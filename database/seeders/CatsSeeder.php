<?php

use Illuminate\Database\Seeder;
use App\Models\Cat;

class CatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::create([
            'name' => 'Whiskers',
            'description' => 'A friendly and playful cat...',
        ]);
        Cat::create([
            'name' => 'Fluffy',
            'description' => 'A cute and cuddly cat...',
        ]);
        // Add more cats as needed
    }
}
