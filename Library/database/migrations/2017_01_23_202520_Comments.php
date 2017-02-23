<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idOfBook')->unsigned();
            $table->integer('idOfUser')->unsigned();
            $table->string('Comment');
            $table->foreign('idOfBook')->references('id')->on('Books')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idOfUser')->references('id')->on('Group')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('Comments');
    }
}
