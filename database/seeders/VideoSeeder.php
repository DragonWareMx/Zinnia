<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/watch?v=23-R1E9Bq84 ',
            'descripcion'=>'Demo La mujer que mueve la balsa',
            'production_id'=>'3',
        ]);
     
        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/watch?v=5comEmpVLcY ',
            'descripcion'=>'Versión en línea',
            'production_id'=>'5',
        ]);
    }
}
