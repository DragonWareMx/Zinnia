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
            'insta'=>'https://www.instagram.com/tanmurix/',
            'fb'=>'https://www.facebook.com/tanmurix',
        ]);
        
        DB::table('profiles')->insert([
            'foto' => '',
            'nombre'=>'PROCELLA ROMERO ZEPEDA',
            'rol'=>'Actriz y Gestora Cultural',
            'cv'=>'',
            'insta'=>'https://www.instagram.com/procellarz/',
            'fb'=>'https://www.facebook.com/procella',
            'tw'=>'https://twitter.com/ProcellaRomero?s=09',
        ]);
        
        DB::table('profiles')->insert([
            'foto' => '',
            'nombre'=>'LAURA CAMACHO APARICIO',
            'rol'=>'Asistencia General',
            'cv'=>'',
            'insta'=>'https://www.instagram.com/lauxcamacho/',
            'fb'=>'https://www.facebook.com/lahadamar6',
        ]);
        
        DB::table('profiles')->insert([
            'foto' => '',
            'nombre'=>'LANDY MEDINA GALAZ',
            'rol'=>'Actriz',
            'cv'=>'',
            'fb'=>'https://www.facebook.com/landy.nana',
            'insta'=>'https://www.instagram.com/landy.medina/',
        ]);
        
        DB::table('profiles')->insert([
            'foto' => '',
            'nombre'=>'ABRIL CIRA PÉREZ VÉLEZ',
            'rol'=>'Actriz',
            'cv'=>'',
            'fb'=>'https://www.facebook.com/Abril-Cira-396665810528851/',
            'insta'=>'https://www.instagram.com/abrilcira/'
        ]);
    }
}
