<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '2000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => '4/5',
            'imdb_rating' => '8/10',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '2000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => '4/5',
            'imdb_rating' => '8/10',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '2000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => '4/5',
            'imdb_rating' => '8/10',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '2000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => '4/5',
            'imdb_rating' => '8/10',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '2000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => '4/5',
            'imdb_rating' => '8/10',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '2000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => '4/5',
            'imdb_rating' => '8/10',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '2000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => '4/5',
            'imdb_rating' => '8/10',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '2000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => '4/5',
            'imdb_rating' => '8/10',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43'
        ]);


    }
}
