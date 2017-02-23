<?php

use Illuminate\Database\Seeder;

class Types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Types')->insert([
        	['Type'=>'ادب عربي'],
        	['Type'=>'ادب مترجم'],
        	['Type'=>'علوم انسانية و اجتماعية'],
        	['Type'=>'كتب علمية'],
        	['Type'=>'كتب فكرية و فلسفية'],
        	['Type'=>'مؤلفات كاملة'],
        	['Type'=>'موسوعات'],
        	['Type'=>'قصص قصيرة'],
        	['Type'=>'كتب اديان و عقائد'],
        	['Type'=>'كتب تنمية بشرية'],
        	['Type'=>'كتب سير و تراجم'],
        	['Type'=>'كتب تربوية'],
        	['Type'=>'كتب فنون'],
        	['Type'=>'كتب تعليمية'],
        	['Type'=>'كتب طب و صحة'],
        	['Type'=>'كتب سيرة ذاتية'],
        	['Type'=>'كتب منوعة'],
        	['Type'=>'صدر حديثاً'],
        ]);
    }
}
