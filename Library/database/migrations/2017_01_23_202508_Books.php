<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name')->unique();
            $table->integer('nameOfAuthor')->unsigned();
            $table->integer('Type')->unsigned();
            $table->integer('typeOfTypes')->unsigned();
            $table->string('informationAboutBook');
            $table->string('pathOfBook');
            $table->string('readBook');
            $table->string('imageOfBook');
            $table->integer('uploadedBy')->unsigned();
            $table->foreign('Type')->references('id')->on('Types')->onUpdate('cascade');
            $table->foreign('typeOfTypes')->references('id')->on('typesOfTypes')->onUpdate('cascade');
            $table->foreign('nameOfAuthor')->references('id')->on('Authors')->onUpdate('cascade');
            $table->foreign('uploadedBy')->references('id')->on('Group');
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
        Schema::disableForeignKeyConstraints();
        Schema::drop('Books');
    }
}
