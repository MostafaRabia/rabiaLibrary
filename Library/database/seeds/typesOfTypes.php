<?php

use Illuminate\Database\Seeder;

class typesOfTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typesOfTypes')->insert([
        	['idOfParentType'=>37,'Type'=>'روايات عربية'],
        	['idOfParentType'=>37,'Type'=>'مسرحيات عربية'],
        	['idOfParentType'=>37,'Type'=>'ادب ساخر'],
        	['idOfParentType'=>37,'Type'=>'دواوين شعر'],
        	['idOfParentType'=>37,'Type'=>'مجموعة قصصية'],
        	['idOfParentType'=>37,'Type'=>'قصص قصيرة'],
        	['idOfParentType'=>37,'Type'=>'قصص اطفال'],
        	['idOfParentType'=>37,'Type'=>'مجلات'],
        	['idOfParentType'=>38,'Type'=>'روايات مترجمة'],
        	['idOfParentType'=>38,'Type'=>'مسرحيات مترجمة'],
        	['idOfParentType'=>39,'Type'=>'كتب اقتصاد و علوم سياسية'],
        	['idOfParentType'=>39,'Type'=>'كتب تاريخية'],
        	['idOfParentType'=>39,'Type'=>'كتب جغرافيا'],
        	['idOfParentType'=>39,'Type'=>'كتب فلسفة'],
        	['idOfParentType'=>39,'Type'=>'كتب علم نفس'],
        	['idOfParentType'=>39,'Type'=>'كتب سياسية'],
        	['idOfParentType'=>39,'Type'=>'كتب علم الاجتماع'],
        	['idOfParentType'=>39,'Type'=>'كتب القانون'],
        	['idOfParentType'=>40,'Type'=>'علم الفلك'],
        	['idOfParentType'=>40,'Type'=>'الفيزياء'],
        	['idOfParentType'=>40,'Type'=>'الكيمياء'],
        	['idOfParentType'=>40,'Type'=>'الاحياء'],
        	['idOfParentType'=>40,'Type'=>'جيولوجيا'],
        	['idOfParentType'=>40,'Type'=>'بيولوجيا'],
        ]);
    }
}
