<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    public function run()
    {
        $planets = [
            [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
                'size_in_km' => 6779
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
                'size_in_km' => 12104
            ],
            [
                'name' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.',
                'size_in_km' => 12742
            ],
            [
                'name' => 'Jupiter',
                'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.',
                'size_in_km' => 142984
            ],
        ];

        foreach ($planets as $planet) {
            DB::table('planets')->insert([
                'name' => $planet['name'],
                'description' => $planet['description'],
                'size_in_km' => $planet['size_in_km'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}