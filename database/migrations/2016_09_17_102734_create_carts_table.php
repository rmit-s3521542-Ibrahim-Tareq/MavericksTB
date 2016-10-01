<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id');

            $table->integer('session_time_id');



            $table->timestamps();
        });

        Schema::table('carts',function ($table){

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::drop('carts');
    }
}
