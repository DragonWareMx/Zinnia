<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PdfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('pdfs')->insert([
            'url' => 'Carpeta-LaPrudencia2021.pdf',
            'descripcion'=>'Carpeta La Prudencia',
            'production_id'=>'1',
        ]);
        \DB::table('pdfs')->insert([
            'url' => 'DOSSIER-La Prudencia2021.pdf',
            'descripcion'=>'Dossier La Prudencia',
            'production_id'=>'1',
        ]);
        \DB::table('pdfs')->insert([
            'url' => 'Ficha-Técnica-RiderLaPrudencia.pdf',
            'descripcion'=>'Rider La Prudencia',
            'production_id'=>'1',
        ]);
    }
}
