<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ecsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vegetables', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->string('img');
           $table->string('description');
           $table->string('size');
           $table->string('contents');
           $table->unsignedInteger('price');
           $table->timestamps();
       });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('vegetables');

        //
    }
}
