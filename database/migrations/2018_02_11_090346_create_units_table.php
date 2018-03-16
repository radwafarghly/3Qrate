<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->integer('size');
            $table->integer('price');
            $table->integer('floor');
            $table->string('img');
            $table->integer('rooms');
            $table->string('extra');
            $table->integer('building_id')->unsigned();
            $table->foreign('building_id')->references('id')->on('buildings')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
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
        Schema::dropIfExists('units');
    }
}
