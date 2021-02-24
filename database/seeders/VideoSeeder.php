<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        
        DB::table('videos')->insert([
            'link' => ' https://www.youtube.com/watch?v=wDQu2WsRoC0&t=14s ',
            'descripcion'=>'Teaser LA PRUDENCIA',
            'production_id'=>'1',
        ]);

        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/watch?v=OOy1as5n0qE
            ',
            'descripcion'=>'Video promocional 1',
            'production_id'=>'1',
        ]);

        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/watch?v=cRYVgl_fldM',
            'descripcion'=>'Video promocional 2',
            'production_id'=>'1',
        ]);
        
        DB::table('videos')->insert([
            'link' => ' https://www.youtube.com/watch?v=QlAXHm4nG0w',
            'descripcion'=>'Entrevistas, Cuéntame algo diferente',
            'proyect_id'=>'1',
        ]);
        
        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/watch?v=8INVnlutDxs',
            'descripcion'=>'Taller 1, Cuéntame algo diferente',
            'proyect_id'=>'1',
        ]);

        DB::table('videos')->insert([
            'link' => ' https://www.youtube.com/watch?v=mk_Z-LK7yhg',
            'descripcion'=>'Taller 2, Cuéntame algo diferente',
            'proyect_id'=>'1',
        ]);
    }
}
