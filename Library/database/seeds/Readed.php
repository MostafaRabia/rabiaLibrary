<?php

use Illuminate\Database\Seeder;

class Readed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Readed')->insert([
        	['idOfBook'=>2,'idOfUser'=>1,'Readed'=>1],
        	['idOfBook'=>4,'idOfUser'=>1,'Readed'=>1],
        ]);
    }
}
