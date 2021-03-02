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
            'link' => 'https://www.youtube.com/embed/23-R1E9Bq84?ecver=2&enablejsapi=1',
            'descripcion'=>'Demo La mujer que mueve la balsa',
            'production_id'=>'3',
        ]);
     
        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/embed/5comEmpVLcY?ecver=2&enablejsapi=1',
            'descripcion'=>'Versión en línea',
            'production_id'=>'5',
        ]);
        
        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/embed/wDQu2WsRoC0?ecver=2&enablejsapi=1',
            'descripcion'=>'Teaser LA PRUDENCIA',
            'production_id'=>'1',
        ]);

        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/embed/OOy1as5n0qE?ecver=2&enablejsapi=1',
            'descripcion'=>'Video promocional 1',
            'production_id'=>'1',
        ]);

        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/embed/cRYVgl_fldM?ecver=2&enablejsapi=1',
            'descripcion'=>'Video promocional 2',
            'production_id'=>'1',
        ]);
        
        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/embed/QlAXHm4nG0w?ecver=2&enablejsapi=1',
            'descripcion'=>'Entrevistas, Cuéntame algo diferente',
            'proyect_id'=>'1',
        ]);
        
        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/embed/8INVnlutDxs?ecver=2&enablejsapi=1',
            'descripcion'=>'Taller 1, Cuéntame algo diferente',
            'proyect_id'=>'1',
        ]);

        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/embed/mk_Z-LK7yhg?ecver=2&enablejsapi=1',
            'descripcion'=>'Taller 2, Cuéntame algo diferente',
            'proyect_id'=>'1',
        ]);
    }
}
