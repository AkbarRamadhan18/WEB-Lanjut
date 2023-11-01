<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt6334354',
            'judul' => 'The Suicide Squad',
            'sinopsis' => 'A group of antiheroes must save the world from a dangerous threat in this standalone sequel to Suicide Squad.',
            'tahun' => 2021,
            'rating' => '7.3',
            'pemain' => ['Margot Robbie', 'Idris Elba', 'John Cena'],
            'foto_sampul' => 'suicide-squad.jpg',
        ],
        [
            'id' => 'tt1825683',
            'judul' => 'Black Panther',
            'sinopsis' => 'TChalla, the King of Wakanda, must take the throne and protect his nation after the death of his father.',
            'tahun' => 2018,
            'rating' => '7.3',
            'pemain' => ['Chadwick Boseman', 'Michael B. Jordan', 'Lupita Nyong\'o'],
            'foto_sampul' => 'black-panther.jpg',
        ],
        [
            'id' => 'tt2911666',
            'judul' => 'John Wick',
            'sinopsis' => 'An ex-hit-man comes out of retirement to track down the gangsters that killed his dog and took everything from him.',
            'tahun' => 2014,
            'rating' => '8.2',
            'pemain' => ['Keanu Reeves', 'Michael Nyqvist', 'Alfie Allen'],
            'foto_sampul' => 'john-wick.jpg',
        ],
        [
            'id' => 'tt5433138',
            'judul' => 'Fast & Furious 9',
            'sinopsis' => 'Cipher enlists the help of Jakob, Dom\'s younger brother to take revenge on Dom and his team.',
            'tahun' => 2021,
            'rating' => '5.2',
            'pemain' => ['Vin Diesel', 'Michelle Rodriguez', 'John Cena'],
            'foto_sampul' => 'fastforious.jpg',
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'rating' => '7.9',
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt3501632',
            'judul' => 'Thor',
            'sinopsis' => 'The powerful but arrogant Thor is cast out of Asgard and must live among humans on Earth to learn humility.',
            'tahun' => 2011,
            'rating' => '7.0',
            'pemain' => ['Chris Hemsworth', 'Natalie Portman', 'Tom Hiddleston'],
            'foto_sampul' => 'thor.jpg',
        ],
        [
            'id' => 'tt10838180',
            'judul' => 'The Matrix',
            'sinopsis' => 'A new chapter in the Matrix saga, as Neo must once again confront the machines and the matrix.',
            'tahun' => 2021,
            'rating' => '6.4',
            'pemain' => ['Keanu Reeves', 'Carrie-Anne Moss', 'Yahya Abdul-Mateen II'],
            'foto_sampul' => 'matrix.jpg',
        ],
        [
            'id' => 'tt3480822',
            'judul' => 'Black Widow',
            'sinopsis' => 'Natasha Romanoff, also known as Black Widow, confronts the darker parts of her ledger when a dangerous conspiracy arises.',
            'tahun' => 2021,
            'rating' => '6.8',
            'pemain' => ['Scarlett Johansson', 'Florence Pugh', 'David Harbour'],
            'foto_sampul' => 'black-widow.jpg',
        ],
        [
            'id' => 'tt10872600',
            'judul' => 'Spider-Man',
            'sinopsis' => 'With the multiverse in crisis, Spider-Man must team up with other Spider-People to save their worlds from collapsing.',
            'tahun' => 2021,
            'rating' => '8.9',
            'pemain' => ['Tom Holland', 'Zendaya', 'Benedict Cumberbatch'],
            'foto_sampul' => 'spider-man.jpg',
        ],
        [
            'id' => 'tt1300854',
            'judul' => 'Iron Man 3',
            'sinopsis' => 'When Tony Stark\'s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.',
            'tahun' => 2013,
            'rating' => '7.4',
            'pemain' => ['Robert Downey Jr.', 'Guy Pearce', 'Gwyneth Paltrow'],
            'foto_sampul' => 'iron-man-3.jpg',
        ],

        [
            'id' => 'tt4154664',
            'judul' => 'Captain Marvel',
            'sinopsis' => 'Carol Danvers becomes one of the universe\'s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.',
            'tahun' => 2019,
            'rating' => '6.8',
            'pemain' => ['Brie Larson', 'Samuel L. Jackson', 'Ben Mendelsohn'],
            'foto_sampul' => 'captain-marvel.jpg',
        ],
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'rating' => '7.1',
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
        ],
        [
            'id' => 'tt1877830',
            'judul' => 'The Batman',
            'sinopsis' => 'In his second year of fighting crime, Batman explores the corruption that plagues Gotham City and how it may tie to his own family.',
            'tahun' => 2022,
            'rating' => '6.4',
            'pemain' => ['Robert Pattinson', 'Zoë Kravitz', 'Paul Dano'],
            'foto_sampul' => 'the-batman.jpg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'rating' => '8.8',
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt1764651',
            'judul' => 'The Expendables 2',
            'sinopsis' => 'Mr. Church reunites the Expendables for what should be an easy paycheck, but when one of their men is murdered on the job, their quest for revenge puts them deep in enemy territory and up against an unexpected threat.',
            'tahun' => 2012,
            'rating' => '6.6',
            'pemain' => ['Sylvester Stallone', 'Jason Statham', 'Jet Li'],
            'foto_sampul' => 'the-expendables.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'rating' => '8.7',
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],

        [
            'id' => 'tt0458339',
            'judul' => 'Captain America',
            'sinopsis' => 'Steve Rogers, a rejected military soldier, transforms into Captain America after taking a dose of a "Super-Soldier serum". But being Captain America comes at a price as he attempts to take down a war monger and a terrorist organization.',
            'tahun' => 2011,
            'rating' => '7.8',
            'pemain' => ['Chris Evans', 'Hugo Weaving', 'Samuel L. Jackson'],
            'foto_sampul' => 'captain-america.jpg',
        ],
        [
            'id' => 'tt0848228',
            'judul' => 'The Avengers',
            'sinopsis' => 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.',
            'tahun' => 2012,
            'rating' => '8.10',
            'pemain' => ['Robert Downey Jr.', 'Chris Evans', 'Mark Ruffalo'],
            'foto_sampul' => 'avengers.jpg',
        ],
        [
            'id' => 'tt12361974',
            'judul' => 'Resident Evil',
            'sinopsis' => 'Sinopsis Resident Evil: Welcome to Raccoon City.',
            'tahun' => 2023,
            'rating' => '7.5',
            'pemain' => ['Kaya Scodelario', 'Hannah John-Kamen', 'Robbie Amell'],
            'foto_sampul' => 'resident-evil.jpg',
        ],
        [
            'id' => 'tt9777666',
            'judul' => 'The Tomorrow War',
            'sinopsis' => 'A family man is drafted to fight in a future war where the fate of humanity relies on his ability to confront the past.',
            'tahun' => 2021,
            'rating' => '6.6',
            'pemain' => ['Chris Pratt', 'Yvonne Strahovski', 'J.K. Simmons'],
            'foto_sampul' => 'the-tomorrow-war.jpg',
        ],

    ];





    public static function all()
    {
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id)
    {
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
    protected $fillable = ['judul', 'sinopsis', 'tahun', 'pemain', 'foto_sampul'];
}
