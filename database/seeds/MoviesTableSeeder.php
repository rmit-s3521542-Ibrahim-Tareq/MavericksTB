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
            'imdb_id' => 'tt1798603',
            'movie_name' => 'Bad Santa 2',
            'release_date' => '1479859200000',
            'genre' => 'Comedy  ',
            'sypnosis' => 'Fueled by cheap whiskey, greed and hatred, Willie teams up once again with his angry little sidekick, Marcus, to knock off a Chicago charity on Christmas Eve.',
            'actors' => 'Billy Bob Thornton, Kathy Bates, Tony Cox, Brett Kelly',
            'poster_url' => 'santa.jpg',
            'rating' => 'R',
            'imdb_rating' => '0',
            'runtime' => 87,
            'created_at' => '2016-10-06 07:53:43',
            'updated_at' => '2016-10-06 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/KRrddku5xRk',
            'short_desc' => 'Christmas will never be the same again.',
            'carousel_url' => 'santa.jpg',
            'carousel_sub' => ''
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt1473832',
            'movie_name' => 'Bridget Jones\' Baby',
            'release_date' => '1473984000000',
            'genre' => 'Comedy, Romance',
            'sypnosis' => 'Bridget\'s focus on single life and her career is interrupted when she finds herself pregnant, but with one hitch ... she can only be fifty percent sure of the identity of her baby\'s father.',
            'actors' => 'Renee Zellweger, Gemma Jones, Jim Broadbent, Colin Firth',
            'poster_url' => 'bridget.jpg',
            'rating' => 'R',
            'imdb_rating' => '7',
            'runtime' => 123,
            'created_at' => '2016-10-06 07:53:43',
            'updated_at' => '2016-10-06 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/mJsvmscPY9w',
            'short_desc' => 'We\'re going to need bigger pants.',
            'carousel_url' => '',
            'carousel_sub' => ''
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt0097050',
            'movie_name' => 'The adventures of Milo and Otis',
            'release_date' => '620006400000',
            'genre' => 'Drama, Adventure, Family',
            'sypnosis' => 'The story of two animals and their adventures. Milo, the cat, and Otis, the dog, are two animals who grew up together on the same farm. One day, the two are separated and begin a journey to find each other. The adventurous, and often perilous quest finds the two animals traveling across mountains, plains, and snow-covered lands searching for one another.',
            'actors' => 'Kyôko Koizumi, Søren Kragh-Jacobsen, Milo',
            'poster_url' => 'milo.jpg',
            'rating' => 'G',
            'imdb_rating' => '7',
            'runtime' => 90,
            'created_at' => '2016-10-06 07:53:43',
            'updated_at' => '2016-10-06 07:53:43',
            'youtube_url' => '',
            'short_desc' => '',
            'carousel_url' => '',
            'carousel_sub' => ''
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt1386697',
            'movie_name' => 'Suicide Squad',
            'release_date' => '1473033600000',
            'genre' => 'Action, Adventure, Comedy',
            'sypnosis' => 'It feels good to be bad...Assemble a team of the world\'s most dangerous, incarcerated Super Villains, provide them with the most powerful arsenal at the government\'s disposal, and send them off on a mission to defeat an enigmatic, insuperable entity. U.S. intelligence officer Amanda Waller has determined only a secretly convened group of disparate, despicable individuals with next to nothing to lose will do. However, once they realize they weren\'t picked to succeed but chosen for their patent culpability when they inevitably fail, will the Suicide Squad resolve to die trying, or decide it\'s every man for himself?',
            'actors' => 'Will Smith, Jaime FitzSimons, Margot Robbie, Ike holtz, Christopher Dyson',
            'poster_url' => 'squad.jpg',
            'rating' => 'M',
            'imdb_rating' => '7',
            'runtime' => 123,
            'created_at' => '2016-10-06 07:53:43',
            'updated_at' => '2016-10-06 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/FsZLAFdyjdk',
            'short_desc' => 'Dangerous criminals unite.',
            'carousel_url' => 'squad.jpg',
            'carousel_sub' => ''
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt2277860',
            'movie_name' => 'Finding Dory',
            'release_date' => '1466121600000',
            'genre' => 'Animation, Adventure, Comedy',
            'sypnosis' => 'Dory is a wide-eyed, blue tang fish who suffers from memory loss every 10 seconds or so. The one thing she can remember is that she somehow became separated from her parents as a child. With help from her friends Nemo and Marlin, Dory embarks on an epic adventure to find them. Her journey brings her to the Marine Life Institute, a conservatory that houses diverse ocean species. Dory now knows that her family reunion will only happen if she can save mom and dad from captivity.',
            'actors' => 'Ellen DeGeneres, Albert Brooks, Ed O\'Neill, Kaitlin Olson',
            'poster_url' => 'dory.jpg',
            'rating' => 'PG',
            'imdb_rating' => '8',
            'runtime' => 97,
            'created_at' => '2016-10-06 07:53:43',
            'updated_at' => '2016-10-06 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/dLIy1K8kJPo',
            'short_desc' => 'Can she find her long-lost parents?',
            'carousel_url' => 'dory.jpg',
            'carousel_sub' => ''
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt1289401',
            'movie_name' => 'Ghostbusters',
            'release_date' => '1468540800000',
            'genre' => 'Action, Comedy, Fantasy',
            'sypnosis' => 'Following a ghost invasion of Manhattan, paranormal enthusiasts Erin Gilbert and Abby Yates, nuclear engineer Jillian Holtzmann, and subway worker Patty Tolan band together to stop the otherworldly threat.',
            'actors' => 'Zach Woods, Kristen Wiig, Charles Dance, Ben Harris, Melissa McCarthy',
            'poster_url' => 'ghost.jpg',
            'rating' => 'M',
            'imdb_rating' => '5',
            'runtime' => 116,
            'created_at' => '2016-10-06 07:53:43',
            'updated_at' => '2016-10-06 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/JINqHA7xywE',
            'short_desc' => '',
            'carousel_url' => '',
            'carousel_sub' => ''
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt4196776',
            'movie_name' => 'Jason Bourne',
            'release_date' => '1469750400000',
            'genre' => 'Action, Thriller',
            'sypnosis' => 'Jason Bourne is again being hunted by the CIA. It begins when Nicky Parson a former CIA operative who helped Bourne who then went under and now works with a man who\'s a whistle blower and is out to expose the CIA\'s black ops. So Nicky hacks into the CIA and downloads everything on all their Black Ops including Treadstone which Bourne was a part of. And Heather Lee, a CIA agent discovers the hack and brings it to the attention of CIA Director Dewey, the man behind the Black Ops. He then orders Parsons be found and hopefully Bourne too.',
            'actors' => 'Matt Damon, Tommy Lee Jones, Alicia Vikander, Vincent Cassel, Julia Stiles',
            'poster_url' => 'bourne.jpg',
            'rating' => 'M',
            'imdb_rating' => '5',
            'runtime' => 123,
            'created_at' => '2016-10-06 07:53:43',
            'updated_at' => '2016-10-06 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/7uLVIUuEfFY',
            'short_desc' => 'You know his name.',
            'carousel_url' => 'bourne.jpg',
            'carousel_sub' => ''
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt2709768',
            'movie_name' => 'The Secret Life of Pets',
            'release_date' => '1467763200000',
            'genre' => 'Animation, Adventure, Comedy',
            'sypnosis' => 'Taking place in a Manhattan apartment building, Max\'s life as a favorite pet is turned upside down, when his owner brings home a sloppy mongrel named Duke. They have to put their quarrels behind when they find out that an adorable white bunny named Snowball is building an army of lost pets determined to take revenge.',
            'actors' => 'Louis C.K, Eric Stonestreet, Kevin Hart, Jenny Slate, Ellie Kemper, Albert Brooks',
            'poster_url' => 'pets.jpg',
            'rating' => 'PG',
            'imdb_rating' => '7',
            'runtime' => 87,
            'created_at' => '2016-10-06 07:53:43',
            'updated_at' => '2016-10-06 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/eWI_Jsw9qUs',
            'short_desc' => '',
            'carousel_url' => 'bourne.jpg',
            'carousel_sub' => ''
        ]);

        DB::table('movies')->insert([
            'imdb_id' => 'tt3263904',
            'movie_name' => 'Sully',
            'release_date' => '1473379200000',
            'genre' => 'Biography, Drama',
            'sypnosis' => 'On Thursday, January 15th, 2009, the world witnessed the "Miracle on the Hudson" when Captain Chesley Sullenberger, nicknamed "Sully" & is portrayed by Tom Hanks glided his disabled plane onto the frigid waters of the Hudson River, saving the lives of all 155 aboard. However, even as Sully was being heralded by the public and the media for his unprecedented feat of aviation skill, an investigation was unfolding that threatened to destroy his reputation and his career.',
            'actors' => 'Tom Hanks, Aaron Eckhart, Valerie Mahaffey, Delphi Harrington',
            'poster_url' => 'sully.jpg',
            'rating' => 'M',
            'imdb_rating' => '8',
            'runtime' => 96,
            'created_at' => '2016-10-06 07:53:43',
            'updated_at' => '2016-10-06 07:53:43',
            'youtube_url' => 'https://www.youtube.com/embed/mjKEXxO2KNE',
            'short_desc' => '',
            'carousel_url' => '',
            'carousel_sub' => ''
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
            'position' => 1,
            'movie_id' => 4
        ]);
        DB::table('carousels')->insert([
            'position' => 2,
            'movie_id' => 5
        ]);
        DB::table('carousels')->insert([
            'position' => 3,
            'movie_id' => 7
        ]);











        DB::table('whats_hots')->insert([
            'position' => 0,
            'movie_id' => 2
        ]);
        DB::table('whats_hots')->insert([
            'position' => 1,
            'movie_id' => 4
        ]);
        DB::table('whats_hots')->insert([
            'position' => 2,
            'movie_id' => 8
        ]);
        DB::table('whats_hots')->insert([
            'position' => 3,
            'movie_id' => 9
        ]);
    }
}
