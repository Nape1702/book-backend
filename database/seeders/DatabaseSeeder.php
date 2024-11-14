<?php

namespace Database\Seeders;

use App\Models\User;
use \App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Book::insert([
            [
                'title' => 'Solo Leveling',
                'author' => 'Chugong',
                'published_year' => 2016,
                'genre' => 'Action, portal fantasy',
                'description' => 'Solo Leveling is a story about Sung Jinwoo, a weak hunter who transforms into one of the strongest
                 hunters in a world threatened by monsters and evil forces',
            ],
            [
                'title' => 'Martial Peak',
                'author' => 'Momo',
                'published_year' => 2012,
                'genre' => ' Action, Adventure, Comedy, Fantasy, Harem, Historical, Martial Arts, Romance, Sci-fi, Shounen',
                'description' => 'The journey to the martial peak is a lonely, solitary and long one. In the face of adversity, you must survive and remain unyielding.
                 Only then you can breakthrough and continue on your journey to becoming the strongest.
                 High Heaven Pavilion tests its disciples in the harshest ways possible to prepare them for such a journey.
                 One day the lowly sweeper Yang Kai managed to obtain a mysterious black book, setting him on the road to the peak of the martial world.',
            ],
            [
                'title' => 'My Hero Academia',
                'author' => 'Kohei Horikoshi',
                'published_year' => 2016,
                'genre' => 'Action, Adventure, Comedy, Drama, Fantasy, Shounen',
                'description' => 'My Hero Academia is a Japanese manga series written and illustrated by Kohei Horikoshi.',
            ],
            [
                'title' => 'One Piece',
                'author' => 'Eiichiro Oda',
                'published_year' => 1997,
                'genre' => 'Action, Adventure, Comedy, Drama, Fantasy, Shounen',
                'description' => 'One Piece is a Japanese manga series written and illustrated by Eiichiro Oda.',
            ],
            [
                'title' => 'Noli Me Tángere',
                'author' => 'José Rizal',
                'published_year' => 1887,
                'genre' => 'Novel, satire, Philippine history',
                'description' => 'Noli Me Tangere is a novel written by Jose Rizal in 1887.',
            ]

        ]);
        
       // User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);
    }
}
