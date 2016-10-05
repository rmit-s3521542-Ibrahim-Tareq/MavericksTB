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
<<<<<<< HEAD
            $table->integer('booking_id');
            $table->string('ticket_id');
            $table->double('quantity');
            $table->timestamps();
=======
            $table->string('moviename');
            $table->string('location');
            $table->string('time');
            $table->integer('childticket');
            $table->integer('adulticket');
            $table->integer('seniorticket');
            $table->integer('concessionticket');
>>>>>>> origin/nicholas
        });

        Schema::table('tickets',function ($table) {
            $table->foreign('booking_id')
                ->references('id')
                ->on('bookings');
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
