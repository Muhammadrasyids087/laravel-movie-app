<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
        ]);
    
        Genre::create([
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought to life through performance.',
        ]);
    
        Genre::create([
            'name' => 'School',
            'description' => ' It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'description' => ' Japanese manga series written and illustrated by Tatsuya Endo. The story follows a spy who has to "build a family" to execute a mission, not realizing that his adopted daughter is a telepath, and the woman he agrees to marry is a skilled assassin.',
        ]);

        Genre::create([
            'name' => 'Action, Adventure',
            'description' => '
            It follows teenage Tanjiro Kamado, who strives to become a Demon Slayer after his family was slaughtered and his younger sister, Nezuko, is turned into a demon.',
        ]);
    }
}
