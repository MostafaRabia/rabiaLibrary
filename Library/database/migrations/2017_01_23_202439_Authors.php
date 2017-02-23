<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Authors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name')->unique();
            $table->string('Facebook')->unique();
            $table->string('Twitter')->unique();
            $table->string('Google')->unique();
            $table->string('Email')->unique();
            $table->string('imageOfAuthor');
            $table->string('aboutHim');
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
        Schema::drop('Authors');
    }
}
