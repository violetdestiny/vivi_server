<?php

namespace Database\Seeders;

use App\Models\DIYToy;
use Illuminate\Database\Seeder;

class DIYToysTableSeeder extends Seeder
{
    public function run()
    {
        $toys = [
            [
                'name' => 'Cardboard Maze',
                'description' => 'Create an interactive maze from cardboard boxes for small pets like hamsters or rabbits.'
            ],
            [
                'name' => 'Sock Cat Toy',
                'description' => 'Fill an old sock with catnip and tie knots to make an irresistible toy for cats.'
            ],
            [
                'name' => 'Bottle Treat Dispenser',
                'description' => 'Cut holes in a plastic bottle and fill with treats to make a puzzle feeder for dogs.'
            ],
            [
                'name' => 'Fleece Tug Toy',
                'description' => 'Braid strips of fleece fabric to create a durable tug toy for dogs.'
            ],
            [
                'name' => 'Toilet Roll Forager',
                'description' => 'Stuff toilet paper rolls with hay and treats for small animals to forage.'
            ]
        ];

        foreach ($toys as $toy) {
            DIYToy::create($toy);
        }
    }
}
