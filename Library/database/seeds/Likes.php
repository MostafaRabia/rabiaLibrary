<?php

use Illuminate\Database\Seeder;

class Likes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Likes')->insert([
        	['idOfBook'=>2,'idOfUser'=>1,'idOfLike'=>1],
        	['idOfBook'=>4,'idOfUser'=>1,'idOfLike'=>2],
        ]);
    }
}
