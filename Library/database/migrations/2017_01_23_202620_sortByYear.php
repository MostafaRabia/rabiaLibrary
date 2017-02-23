<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class sortByYear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sortByYear', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idOfBook')->unsigned();
            $table->integer('h-Y-Readed');
            $table->integer('h-Y-Liked');
            $table->foreign('idOfBook')->references('id')->on('Books')->onUpdate('cascade');
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
        Schema::drop('sortByYear');
    }
}
