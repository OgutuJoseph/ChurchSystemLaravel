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
            $table->increments('reservation_id'); 
            $table->integer('service_id')->unsigned();
            $table->string('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('number_of_seats');
            $table->integer('member_id')->unsigned();
            $table->string('email');
            $table->boolean('status');
            $table->foreign('service_id')
                ->references('service_id')->on('services')
                ->onDelete('cascade');
            $table->foreign('member_id')
                ->references('member_id')->on('members')
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
        Schema::dropIfExists('reservations');
    }
}
