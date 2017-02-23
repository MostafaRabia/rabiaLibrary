<?php

use Illuminate\Database\Seeder;

class Authors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Authors')->insert([
        	['name'=>'عمر عبد الحميد']
        ]);
    }
}
