<?php

use Illuminate\Database\Seeder;

class Books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 17; $i++) { 
            DB::table('Books')->insert([
                ['Name'=>'ارض زيكولا '+$i+' (اماريتا)','nameOfAuthor'=>1,'Type'=>37,'typeOfTypes'=>1,'informationAboutBook'=>'رواية ارض زيكولا 2 (اماريتا) هي ثاني رواية للمؤلف عمر عبد الحميد الذي ألف ارض زيكولا و التي كانت رائعة جداً و هذه الرواية هي تكملة لها حيث نري اسيل و عطفها علي خالد و كيف سيساعدها خالد و ملك بلاد اسيل','pathOfBook'=>'null','readBook'=>'null','imageOfBook'=>url('Library/public/images/1.jpg'),'uploadedBy'=>1],
            ]);
        }
    }
}
