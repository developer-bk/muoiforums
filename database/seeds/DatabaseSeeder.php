<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'subject'=>'Chị Lệ bị chó cắn tiêm 3 mũi',
            'short_content'=>'<h3>Mở đầu là bản tin sau khi chuyển trọ chị Hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại...<h3>',
            'content'=>'<h3>Mở đầu là bản tin sau khi chuyển trọ chị hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại.đâsdasdasdasdasdasdadadadadadadadd sdfsdfsdfsdf sdfsdfsdfsd dsfsdfsdfsdf sdfsdfsdfsd sdfsdfsdfsdf sdfsdfsdfsdf sdfsdfsdf<h3>',
            'user_created_id'=>6,
            'box_id'=>2
        ]);



    }
}
