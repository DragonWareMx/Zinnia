<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profiles')->insert([
            'foto' => '',
            'nombre'=>'TANIA MURILLO TOVAR',
            'rol'=>'Concepto y Dirección Escénica',
            'cv'=>'',
        ]);
        
        DB::table('profiles')->insert([
            'foto' => '',
            'nombre'=>'PROCELLA ROMERO ZEPEDA',
            'rol'=>'Actriz y Gestora Cultural',
            'cv'=>'',
        ]);
        
        DB::table('profiles')->insert([
            'foto' => '',
            'nombre'=>'LAURA CAMACHO APARICIO',
            'rol'=>'Asistencia General',
            'cv'=>'',
        ]);
        
        DB::table('profiles')->insert([
            'foto' => '',
            'nombre'=>'LANDY MEDINA GALAZ',
            'rol'=>'Actriz',
            'cv'=>'',
        ]);
        
        DB::table('profiles')->insert([
            'foto' => '',
            'nombre'=>'ABRIL CIRA PÉREZ VÉLEZ',
            'rol'=>'Actriz',
            'cv'=>'',
        ]);
    }
}
