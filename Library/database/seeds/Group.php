<?php

use Illuminate\Database\Seeder;

class Group extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Group')->insert([
        	['Name'=>'MostafaRabia','Password'=>bcrypt('A_Mostafa'),'Email'=>'mostafarabia64@gmail.com','imageOfUser'=>NULL,'Permissions'=>1]
        ]);
    }
}
