<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sofa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sofa', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->string('img');
             $table->string('description');
             $table->string('size');
             $table->string('kiji');
             $table->string('type');
             $table->string('op');
             $table->unsignedInteger('price');
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
        Schema::dropIfExists('sofa');//
    }
}
