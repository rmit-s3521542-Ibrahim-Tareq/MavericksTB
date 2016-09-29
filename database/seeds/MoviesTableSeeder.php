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
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo',
            'short_desc' => 'This is a short random string of text!',
            'carousel_url' => 'deadpool.jpg'
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
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo',
            'short_desc' => 'This is a short random string of text!',
            'carousel_url' => 'deadpool.jpg'
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
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo',
            'short_desc' => 'This is a short random string of text!',
            'carousel_url' => 'deadpool.jpg'
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
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo',
            'short_desc' => 'This is a short random string of text!',
            'carousel_url' => 'zootopia.png'
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
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo',
            'short_desc' => 'This is a short random string of text!',
            'carousel_url' => 'deadpool.jpg'
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt'. str_random(8),
            'movie_name' => str_random(3) . ' ' . str_random(7) . ' ' . str_random(5),
            'release_date' => '1474676349000',
            'genre' => 'Horror',
            'sypnosis' => str_random(150),
            'actors' => '',
            'poster_url' => 'squad.jpg',
            'rating' => 'R',
            'imdb_rating' => '8',
            'runtime' => 90,
            'created_at' => '2016-09-21 07:53:43',
            'updated_at' => '2016-09-21 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo',
            'short_desc' => 'This is a short random string of text!',
            'carousel_url' => 'batman.jpg'
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
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo',
            'short_desc' => 'This is a short random string of text!',
            'carousel_url' => 'deadpool.jpg'
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
            'youtube_url' => 'https://www.youtube.com/embed/4SaBjMHtQqo',
            'short_desc' => 'This is a short random string of text!',
            'carousel_url' => 'bourne.jpg'
        ]);













        DB::table('cinemas')->insert([
            'cinema_name' => 'Melbourne Central',
            'location' => 'Melbourne CBD - Swanston Street'
        ]);

        DB::table('cinemas')->insert([
            'cinema_name' => 'Watergardens',
            'location' => 'Watergardens'
        ]);

        DB::table('cinemas')->insert([
            'cinema_name' => 'Northland',
            'location' => 'Northland'
        ]);









        DB::table('session_times')->insert([
            'session_time' => 'Monday, 2 - 5PM',
            'movie_id' => 6,
            'cinema_id' => 1
        ]);
        DB::table('session_times')->insert([
            'session_time' => 'Wednesday, 5 - 7PM',
            'movie_id' => 6,
            'cinema_id' => 1
        ]);
        DB::table('session_times')->insert([
            'session_time' => 'Friday, 8 - 10PM',
            'movie_id' => 6,
            'cinema_id' => 1
        ]);











        DB::table('carousels')->insert([
            'position' => 0,
            'movie_id' => 1
        ]);
        DB::table('carousels')->insert([
            'position' => 0,
            'movie_id' => 2
        ]);
        DB::table('carousels')->insert([
            'position' => 0,
            'movie_id' => 3
        ]);
        DB::table('carousels')->insert([
            'position' => 0,
            'movie_id' => 7
        ]);
        DB::table('carousels')->insert([
            'position' => 0,
            'movie_id' => 4
        ]);
    }
}
