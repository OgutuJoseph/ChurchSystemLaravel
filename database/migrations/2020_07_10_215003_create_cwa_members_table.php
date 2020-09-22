<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCWAMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cwa_members', function (Blueprint $table) {
            $table->increments('cwa_id'); 
            $table->string('surname');
            $table->string('other_names');
            $table->integer('phone');
            $table->string('dob');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')
                ->references('group_id')->on('church_groups')
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
        Schema::dropIfExists('c_w_a_members');
    }
}
