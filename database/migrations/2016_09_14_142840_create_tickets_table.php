<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_id');
            $table->integer('session_time_id');
            $table->string('movie_id');
            $table->string('cinema_id');
            $table->integer('childticket');
            $table->integer('adulticket');
            $table->integer('seniorticket');
            $table->integer('concessionticket');
            $table->timestamps();
        });

        Schema::table('tickets',function ($table) {
            $table->foreign('booking_id')
                ->references('id')
                ->on('bookings')
                ->onDelete('cascade');

            //session time that was booked
            $table->foreign('session_time_id')
                ->references('id')
                ->on('session_times')
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
        Schema::drop('tickets');
    }
}
