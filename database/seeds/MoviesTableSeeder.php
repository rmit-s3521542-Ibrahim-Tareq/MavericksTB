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
            'release_date' => '1474676349000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => 'PG',
            'imdb_rating' => '8',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '1474676349000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => 'M',
            'imdb_rating' => '8',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '1474676349000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => 'Unrated',
            'imdb_rating' => '8',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '1474676349000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => 'G',
            'imdb_rating' => '8',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '1474676349000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => 'MA',
            'imdb_rating' => '8',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '1474676349000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => 'R',
            'imdb_rating' => '8',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '1474676349000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => 'M',
            'imdb_rating' => '8',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '1474676349000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'sausage.jpg',
            'rating' => 'G',
            'imdb_rating' => '8',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo'
        ]);


    }
}
