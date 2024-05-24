<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'title' => 'Jojo Bizzare Adventure',
            'user' => 'Naruto',
            'rate' => 8.0,
            'date' => '12 Mei 2024',
        ]);

        Review::create([
            'id' => 2,
            'title' => 'Noragami',
            'user' => 'Sai',
            'rate' => 8.5,
            'date' => '05 Mei 2024',
        ]);

        Review::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'user' => 'Kakashi',
            'rate' => 8.7,
            'date' => '25 April 2024',
        ]);

        Review::create([
            'id' => 4,
            'title' => 'Spy x Family',
            'user' => 'Sakura',
            'rate' => 9.0,
            'date' => '22 Februari 2024',
        ]);

        Review::create([
            'id' => 5,
            'title' => 'Demon Slayer',
            'user' => 'Sasuke',
            'rate' => 9.4,
            'date' => '11 April 2024',
        ]);

        Review::create([
            'id' => 6,
            'title' => 'My Hero Academia',
            'user' => 'Rock Lee',
            'rate' => 9.2,
            'date' => '19 April 2024',
        ]);

        Review::create([
            'id' => 7,
            'title' => 'Jujutsu Kaisen',
            'user' => 'Tenten',
            'rate' => 9.5,
            'date' => '13 Januari 2024',
        ]);

        Review::create([
            'id' => 8,
            'title' => 'Attack on Titan',
            'user' => 'Shikamaru',
            'rate' => 9.1,
            'date' => '04 Mei 2024',
        ]);
    }
}
