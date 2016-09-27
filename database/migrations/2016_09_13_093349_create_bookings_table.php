<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');

            //foreign keys from other tables.
            //user who made the booking

            $table->integer('user_id');

            $table->integer('session_time_id');

            
            $table->timestamps();
        });

        Schema::table('bookings', function ($table){

            $table->foreign('user_id')
                ->references('id')
                ->on('users');


            //session time that was booked
            $table->foreign('session_time_id')
                ->references('id')
                ->on('session_times');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}