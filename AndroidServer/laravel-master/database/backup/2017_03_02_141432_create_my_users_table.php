<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
//            $table->string('sex');
//            $table->string('age');
            $table->string('email')->unique();
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('my_users');
    }
}
