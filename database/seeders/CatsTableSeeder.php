<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cat::create([
            'name' => 'Whiskers',
            'description' => 'Friendly orange tabby, loves cuddles',
            'age' => 3,
            'gender' => 'Male',
            'breed' => 'Tabby',
            'fee' => 100,
        ]);

        \App\Models\Cat::create([
            'name' => 'Mittens',
            'description' => 'Playful black and white kitten',
            'age' => 1,
            'gender' => 'Female',
            'breed' => 'Domestic Shorthair',
            'fee' => 120,
        ]);
    }
}
