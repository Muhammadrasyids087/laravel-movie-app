@extends('_layouts.main') 

@section('content')
<!-- ===== Main Content Start ===== -->
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <h2 class="mb-7.5 mt-10 text-title-md2 font-bold text-black dark:text-white">
            Movie List
        </h2>

        <div class="grid grid-cols-1 gap-7.5 sm:grid-cols-2 xl:grid-cols-4">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-01.jpg" alt="Movies" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Jojo Adventure</a>
                    </h4>
                    <p class="font-medium">
                        Jojo's Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.
                    </p>
                </div>
            </div>

            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-02.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Noragami</a>
                    </h4>
                    <p class="font-medium">
                        Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.
                    </p>
                </div>
            </div>

            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-03.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Wind Breaker</a>
                    </h4>
                    <p class="font-medium">
                        Haruka Sakura wants nothing to do with weaklings—he's only interested in the strongest of the strong.
                    </p>
                </div>
            </div>

            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-04.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Spy x Family</a>
                    </h4>
                    <p class="font-medium">
                        Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.
                    </p>
                </div>
            </div>

            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-05.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Demon Slayer</a>
                    </h4>
                    <p class="font-medium">
                    Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.
                    </p>
                </div>
            </div>

            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-06.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">My Hero Academia</a>
                    </h4>
                    <p class="font-medium">
                    A superhero-admiring boy enrolls in a prestigious hero academy and learns what it really means to be a hero, after the strongest superhero grants him his own powers.
                    </p>
                </div>
            </div>
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-07.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Jujutsu Kaisen</a>
                    </h4>
                    <p class="font-medium">
                    Summaries. A boy swallows a cursed talisman - the finger of a demon - and becomes cursed himself. He enters a shaman's school to be able to locate the demon's other body parts and thus exorcise himself.
                    </p>
                </div>
            </div>
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-08.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Attack on Titan</a>
                    </h4>
                    <p class="font-medium">
                    A teenage boy named Eren Jaeger must use his special gift to fight alongside with the military to defeat the titan race. Mankind is on the brink of extinction when these man-eating monsters terrorize everybody and set to destroy the last of human civilization left in the world.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
