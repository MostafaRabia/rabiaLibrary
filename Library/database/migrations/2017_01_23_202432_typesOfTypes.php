<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TypesOfTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typesOfTypes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idOfParentType')->unsigned();
            $table->string('Type');
            $table->foreign('idOfParentType')->references('id')->on('Types')->onUpdate('cascade');
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
        Schema::drop('typesOfTypes');    
    }
}
