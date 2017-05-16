<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sex');
            $table->string('age');
            $table->string('job');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stuffs');
    }
}
