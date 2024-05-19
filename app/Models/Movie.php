<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo Bizzare Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.'
        ],

        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ],

        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ],

        [
            'id' => 4,
            'title' => 'Spy x Family',
            'poster' => 'movie-04.jpg',
            'genre' => 'Action, Drama',
            'synopsis' => 'Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.

            '
        ],

        [
            'id' => 5,
            'title' => 'Demon Slayer',
            'poster' => 'movie-05.jpg',
            'genre' => 'Action, Adventure',
            'synopsis' => 'Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.'
        ],

        [
            'id' => 6,
            'title' => 'My Hero Academia',
            'poster' => 'movie-06.jpg',
            'genre' => 'Action, Adventure, Comedy',
            'synopsis' => 'A superhero-admiring boy enrolls in a prestigious hero academy and learns what it really means to be a hero, after the strongest superhero grants him his own powers.'
        ],
        [
            'id' => 7,
            'title' => 'Jujutsu Kaisen',
            'poster' => 'movie-07.jpg',
            'genre' => 'Action, Adventure',
            'synopsis' => 'Summaries. A boy swallows a cursed talisman - the finger of a demon - and becomes cursed himself. He enters a shamans school to be able to locate the demons other body parts and thus exorcise himself.'
        ],
        [
            'id' => 8,
            'title' => 'Attack on Titan',
            'poster' => 'movie-08.jpg',
            'genre' => 'Action, Adventure, Dark fantasy',
            'synopsis' => 'A teenage boy named Eren Jaeger must use his special gift to fight alongside with the military to defeat the titan race. Mankind is on the brink of extinction when these man-eating monsters terrorize everybody and set to destroy the last of human civilization left in the world.'
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
