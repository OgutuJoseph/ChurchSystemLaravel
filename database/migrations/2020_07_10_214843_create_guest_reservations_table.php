<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_reservations', function (Blueprint $table) {
            $table->increments('reserve_id'); 
            $table->integer('service_id')->unsigned();
            $table->string('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('number_of_seats');
            $table->integer('guest_id')->unsigned();
            $table->string('email');
            $table->boolean('status');
            $table->foreign('service_id')
                ->references('service_id')->on('services')
                ->onDelete('cascade');
            $table->foreign('guest_id')
                ->references('guest_id')->on('guests')
                ->onDelete('cascade');
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
        Schema::dropIfExists('guest_reservations');
    }
}
