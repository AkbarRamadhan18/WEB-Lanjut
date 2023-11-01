<?php

namespace App\Models;

class Rekomendasi
{
    private static $rekomendasi = [
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
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'rating' => '7.1',
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
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
            'id' => 'tt10872600',
            'judul' => 'Spider-Man',
            'sinopsis' => 'With the multiverse in crisis, Spider-Man must team up with other Spider-People to save their worlds from collapsing.',
            'tahun' => 2021,
            'rating' => '8.9',
            'pemain' => ['Tom Holland', 'Zendaya', 'Benedict Cumberbatch'],
            'foto_sampul' => 'spider-man.jpg',
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
    ];

    public static function all()
    {
        return collect(self::$rekomendasi);
    }

    public static function find($id)
    {
        return static::all()->firstWhere('id', $id);
    }
}
