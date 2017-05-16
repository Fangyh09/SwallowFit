<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalcase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('medicalcase', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('category_id');
//            $table->foreign('category_id')->references('id')->on('medicalcase_category');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicalcase');
    }
}
