<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigIncrements('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->integer('num_of_guests');
            $table->date('arrival');
            $table->date('departure');
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
        Schema::dropIfExists('reservations');
    }
}
