<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proyects')->insert([
            'titulo' => 'CUENTAME ALGO DIFERENTE',
            'subtitulo'=>'Taller de arte para niños y jóvenes con discapacidad',
            'estado'=>'vigente',
            'descripcion'=>'Este proyecto busca utilizar el arte como encuentro comunicativo y así estimular la capacidad 
            emocional de niños y jóvenes con discapacidad, desarrollando su potencial creativo a través de la música, 
            el teatro y las artes plásticas de manera lúdica, impartido por artistas con trayectoria en la docencia y 
            a su vez activos en la producción artística
            ',
            'titulo3'=>'Objetivos logrados',
            'txtTitulo3'=>'-En su primera implementación el proyecto logró llevar a cabo dos talleres de 85 horas cada uno, con un total de 48 participantes beneficiados de manera directa. Se trabajo en alianza con diferentes instituciones para lograr las metas (Centro de la Cultura de la Discapacidad CCD, DIF Morelia, Centro Cultural UNAM, CRIT Michoacán).
            -Se impartió una capacitación sobre cultura de la discapacidad como preparación para los docentes y auxiliares en el Liceo Michoacano. 
            -Se lograron tres presentaciones escénicas finales de la adaptación del cuento El Monstruo de colores como resultado de los talleres impartidos a niños y niñas de las distintas sedes.
            -Se realizó una sistematización de la experiencia (Sirvent y Rigal, 2008) a partir de una evaluación de la metodología (propuesta por UNICEF en experiencias de inclusión educativa desde la perspectiva de aprender juntos), así como un registro en video que se presentó a las instancias involucradas en el proyecto. 
            -La segunda ejecución del proyecto se llevó a cabo en el Curso de Verano PUMITAS, ENES, UNAM Unidad Morelia, teniendo como resultado final una exposición de los trabajos artísticos realizados por las niñas y niños durante el taller.
            ',
            'masinfo'=>'DOCENTES
            Música: Norma Ferreira / Vianey Rivera
            Artes Plásticas: Alejandra Mundo Nájera / Yunuen Corral
            Teatro: Tania Murillo Tovar
            
            AUXILIARES 
            Idalia López Castañeda
            Raquel Almaguer Martínez
            Ulises Ochoa Gaytan 
            
            VOLUNTARIADO
            Andréa De La Rosa Verduzco
            
            EQUIPO CREATIVO
            Autora de cuento El Monstruo de Colores: Ana Llenas
            Adaptación de cuento: Tania Murillo  
            Realización de títeres: Edwin Salas
            Ajustes y Vestuario de Títeres: Alejandra Mundo y Tania Murillo
            Titiriteros: Alejandra Mundo, Ulises Ochoa Gaytan, Idalia López Castañeda y Tania Murillo
            Fotografía, Motion Y Video Final: Idalia López Castañeda
            Imagen Gráfica, Motion, Fotografía Y Videos de los Talleres I Y II: Abraham Plata
            Redes Sociales: Idalia López Castañeda, Alejandra Mundo Nájera y Tania Murillo
            
            ',
            'titulo2'=>'Metodología',
            'txtTitulo2'=>'Para este proyecto como tema medular se eligió el trabajo de las emociones, 
            para abordarlo utilizamos como eje rector el cuento El Monstruo de colores (Llenas, 2012), 
            el cual plantea 6 emociones identificadas y asociadas por colores. Este cuento se adaptó 
            para tener una representación escénica con títeres a escala humana. A esta propuesta sumamos
            la aplicación de diferentes técnicas artísticas tanto plásticas como escénicas: dripping, esgrafiado, 
            pintura dactilar, entre otras; música, basada en la técnica Dalcroz, y teatro corporal, además de la 
            reflexión y retroalimentación continua al recibir cada tanto a los títeres para refrescar la emoción 
            en la que nos encontramos.
            ',
            'creditos'=>'CRÉDITOS
            Gestión Y Coordinación: Tania Murillo Tovar
            Producción y Materiales : Alejandra Mundo Nájera
            Asesor de Cultura de la Discapacidad e Inclusión y Evaluación de la Metodología: María Luisa Vega Monroy.
            ',
            'quote'=>'Se impartió una capacitación sobre cultura de la discapacidad como preparación para los docentes y auxiliares en el Liceo Michoacano. ',
        ]);
    }
}
