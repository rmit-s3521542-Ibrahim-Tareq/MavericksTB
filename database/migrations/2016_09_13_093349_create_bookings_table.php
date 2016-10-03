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
            $table->integer('booking_id');
            $table->text('name');
            $table->string('address');
            $table->text('city');
            $table->integer('postcode');
            $table->integer('mobilenum');
            $table->integer('cardnum');
            $table->integer('expirymonth');
            $table->integer('expiryear');
            $table->integer('securitynum');
            $table->timestamps();
        });

        /* Schema::table('bookings', function ($table){

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


            //session time that was booked
            $table->foreign('session_time_id')
                ->references('id')
                ->on('session_times')
                ->onDelete('cascade');

        }); */
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
