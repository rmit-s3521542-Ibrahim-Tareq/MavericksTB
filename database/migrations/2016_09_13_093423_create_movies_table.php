<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imdb_id')->unique();
            $table->string('movie_name');
            $table->dateTime('release_date');
            $table->string('genre');
            $table->string('sypnosis');
            $table->string('actors');
            $table->string('poster_url');
            $table->string('rating');
            $table->string('imdb_rating');
            $table->string('youtube_url');
            $table->integer('runtime');
            $table->string('short_desc');
            $table->string('carousel_url');
            $table->string('carousel_sub');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movies');
    }
}
