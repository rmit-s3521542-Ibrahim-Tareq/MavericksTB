<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_times', function (Blueprint $table) {
            $table->increments('id');

            $table->dateTime('session_time');

            $table->integer('movie_id');
            $table->integer('cinema_id');


            $table->timestamps();
        });

        Schema::table('session_times', function ($table) {
            $table->foreign('movie_id')
                ->references('id')
                ->on('movies');

            $table->foreign('cinema_id')
                ->references('id')
                ->on('cinemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('session_times');
    }
}
