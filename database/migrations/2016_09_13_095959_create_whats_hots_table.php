<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhatsHotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whats_hots', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('position');

            $table->integer('movie_id');

            $table->timestamps();
        });

        Schema::table('whats_hots',function ($table) {

            $table->foreign('movie_id')
                ->references('id')
                ->on('movies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('whats_hots');
    }
}
