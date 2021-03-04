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
            'url' => 'Carpeta-La-Prudencia-ENARTES.pdf',
            'descripcion'=>'Carpeta La Prudencia',
            'production_id'=>'1',
        ]);
        \DB::table('pdfs')->insert([
            'url' => 'DOSSIER-LA-PRUDENCIA-ENARTES.pdf',
            'descripcion'=>'Dossier La Prudencia',
            'production_id'=>'1',
        ]);
        \DB::table('pdfs')->insert([
            'url' => 'Ficha-Técnica-Rider-La-Prudencia.pdf',
            'descripcion'=>'Rider La Prudencia',
            'production_id'=>'1',
        ]);
        \DB::table('pdfs')->insert([
            'url' => 'DOSSIER-INGLES-LA-PRUDENCIA-ENARTES.pdf',
            'descripcion'=>'Dossier La Prudencia (Inglés)',
            'production_id'=>'1',
        ]);
    }
}
