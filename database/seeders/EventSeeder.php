<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('events')->insert([
            'titulo' => 'LA PRUDENCIA',
            'fecha' => '2021-03-21',
            'hora' => '18:00',
            'lugar' => '',
            'tipo' => 'Presentación virtual',
            'link' => 'https://www.youtube.com/channel/UCcVtQc1KVtHPUhHNBZmXvfw',
            'masinfo' => 'Muestra Estatal de Teatro Michoacán MET 2020',
        ]);
        DB::table('events')->insert([
            'titulo' => 'Conversatorio/Desmontaje:  DESMONTAJE DE PROCESOS ARTÍSTICOS Y VIRTUALIDAD/LA PRUDENCIA',
            'fecha' => '2021-03-21',
            'hora' => '19:15',
            'lugar' => '',
            'tipo' => 'Presentación virtual',
            'link' => 'https://www.youtube.com/channel/UCcVtQc1KVtHPUhHNBZmXvfw',
            'masinfo' => 'Muestra Estatal de Teatro MET 2020',
        ]);

        DB::table('events')->insert([
            'titulo' => 'LA PRUDENCIA',
            'fecha' => '2021-03-21',
            'hora' => '19:15',
            'lugar' => '',
            'tipo' => 'Presentación virtual',
            'link' => 'https://voyalteatro.com/ ',
            'masinfo' => 'Temporada en Sala Virtual 2021 Voy al Teatro, Jalisco',
        ]);
    }
}