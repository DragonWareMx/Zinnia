<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'txtTitulo3'=>'
            <p>-En&nbsp;su&nbsp;primera&nbsp;implementaci&oacute;n&nbsp;el&nbsp;proyecto&nbsp;logr&oacute;&nbsp;llevar&nbsp;a&nbsp;cabo&nbsp;dos&nbsp;talleres&nbsp;de&nbsp;85&nbsp;horas&nbsp;cada&nbsp;uno,&nbsp;con&nbsp;un&nbsp;total&nbsp;de&nbsp;48&nbsp;participantes&nbsp;beneficiados&nbsp;de&nbsp;manera&nbsp;directa.Se&nbsp;trabajo&nbsp;en&nbsp;alianza&nbsp;con&nbsp;diferentes&nbsp;instituciones&nbsp;para&nbsp;lograr&nbsp;las&nbsp;metas&nbsp;(Centro&nbsp;de&nbsp;la&nbsp;Cultura&nbsp;de&nbsp;la&nbsp;Discapacidad&nbsp;CCD,&nbsp;DIF&nbsp;Morelia,&nbsp;Centro&nbsp;Cultural&nbsp;UNAM,&nbsp;CRIT&nbsp;Michoac&aacute;n).</p>

<p>-Se&nbsp;imparti&oacute;&nbsp;una&nbsp;capacitaci&oacute;n&nbsp;sobre&nbsp;cultura&nbsp;de&nbsp;la&nbsp;discapacidad&nbsp;como&nbsp;preparaci&oacute;n&nbsp;para&nbsp;los&nbsp;docentes&nbsp;y&nbsp;auxiliares&nbsp;en&nbsp;el&nbsp;Liceo&nbsp;Michoacano.&nbsp;</p>

<p>-Se&nbsp;lograron&nbsp;tres&nbsp;presentaciones&nbsp;esc&eacute;nicas&nbsp;finales&nbsp;de&nbsp;la&nbsp;adaptaci&oacute;n&nbsp;del&nbsp;cuento&nbsp;El&nbsp;Monstruo&nbsp;de&nbsp;colores&nbsp;como&nbsp;resultado&nbsp;de&nbsp;los&nbsp;talleres&nbsp;impartidos&nbsp;a&nbsp;ni&ntilde;os&nbsp;y&nbsp;ni&ntilde;as&nbsp;de&nbsp;las&nbsp;distintas&nbsp;sedes.</p>

<p>&nbsp;-Se&nbsp;realiz&oacute;&nbsp;una&nbsp;sistematizaci&oacute;n&nbsp;de&nbsp;la&nbsp;experiencia&nbsp;(Sirvent&nbsp;y&nbsp;Rigal,&nbsp;2008)&nbsp;a&nbsp;partir&nbsp;de&nbsp;una&nbsp;evaluaci&oacute;n&nbsp;de&nbsp;la&nbsp;metodolog&iacute;a&nbsp;(propuesta&nbsp;por&nbsp;UNICEF&nbsp;en&nbsp;experiencias&nbsp;de&nbsp;inclusi&oacute;n&nbsp;educativa&nbsp;desde&nbsp;la&nbsp;perspectiva&nbsp;de&nbsp;aprender&nbsp;juntos),&nbsp;as&iacute;&nbsp;como&nbsp;un&nbsp;registro&nbsp;en&nbsp;video&nbsp;que&nbsp;se&nbsp;present&oacute;&nbsp;a&nbsp;las&nbsp;instancias&nbsp;involucradas&nbsp;en&nbsp;el&nbsp;proyecto.&nbsp;</p>

<p>-La&nbsp;segunda&nbsp;ejecuci&oacute;n&nbsp;del&nbsp;proyecto&nbsp;se&nbsp;llev&oacute;&nbsp;a&nbsp;cabo&nbsp;en&nbsp;el&nbsp;Curso&nbsp;de&nbsp;Verano&nbsp;PUMITAS,&nbsp;ENES,&nbsp;UNAM&nbsp;Unidad&nbsp;Morelia,&nbsp;teniendo&nbsp;como&nbsp;resultado&nbsp;final&nbsp;una&nbsp;exposici&oacute;n&nbsp;de&nbsp;los&nbsp;trabajos&nbsp;art&iacute;sticos&nbsp;realizados&nbsp;por&nbsp;las&nbsp;ni&ntilde;as&nbsp;y&nbsp;ni&ntilde;os&nbsp;durante&nbsp;el&nbsp;taller.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>&nbsp;</p>

            ',
            'masinfo'=>'
            <p><strong>DOCENTES</strong></p>

            <p><strong>M&uacute;sica:</strong>&nbsp;Norma&nbsp;Ferreira&nbsp;/&nbsp;Vianey&nbsp;Rivera</p>
            
            <p><strong>Artes&nbsp;Pl&aacute;stica</strong>s:&nbsp;Alejandra&nbsp;Mundo&nbsp;N&aacute;jera&nbsp;/&nbsp;Yunuen&nbsp;Corral</p>
            
            <p><strong>Teatro:</strong>&nbsp;Tania&nbsp;Murillo&nbsp;Tovar</p>
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            
            <p><strong>AUXILIARES&nbsp;</strong></p>
            
            <p>Idalia&nbsp;L&oacute;pez&nbsp;Casta&ntilde;eda</p>
            
            <p>Raquel&nbsp;Almaguer&nbsp;Mart&iacute;nez</p>
            
            <p>Ulises&nbsp;Ochoa&nbsp;Gaytan&nbsp;</p>
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            
            <p><strong>VOLUNTARIADO</strong></p>
            
            <p>Andr&eacute;a&nbsp;De&nbsp;La&nbsp;Rosa&nbsp;Verduzco</p>
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            
            <p><strong>EQUIPO&nbsp;CREATIVO</strong></p>
            
            <p><strong>Autora&nbsp;de&nbsp;cuento&nbsp;El&nbsp;Monstruo&nbsp;de&nbsp;Colores:</strong>&nbsp;Ana&nbsp;Llenas</p>
            
            <p><strong>Adaptaci&oacute;n&nbsp;de&nbsp;cuento:</strong>&nbsp;Tania&nbsp;Murillo&nbsp;&nbsp;</p>
            
            <p><strong>Realizaci&oacute;n&nbsp;de&nbsp;t&iacute;teres:</strong>&nbsp;Edwin&nbsp;Salas</p>
            
            <p><strong>Ajustes&nbsp;y&nbsp;Vestuario&nbsp;de&nbsp;T&iacute;teres:</strong>&nbsp;Alejandra&nbsp;Mundo&nbsp;y&nbsp;Tania&nbsp;Murillo</p>
            
            <p><strong>Titiriteros:</strong>&nbsp; Alejandra&nbsp;Mundo,&nbsp;Ulises&nbsp;Ochoa&nbsp;Gaytan,&nbsp;Idalia&nbsp;L&oacute;pez&nbsp;Casta&ntilde;eda&nbsp;y&nbsp;Tania&nbsp;Murillo</p>
            
            <p><strong>Fotograf&iacute;a,&nbsp;Motion&nbsp;Y&nbsp;Video&nbsp;Final:</strong>&nbsp;Idalia&nbsp;L&oacute;pez&nbsp;Casta&ntilde;eda</p>
            
            <p><strong>Imagen&nbsp;Gr&aacute;fica,&nbsp;Motion,&nbsp;Fotograf&iacute;a&nbsp;Y&nbsp;Videos&nbsp;de&nbsp;los&nbsp;Talleres&nbsp;I&nbsp;Y&nbsp;II:</strong>&nbsp;Abraham&nbsp;Plata</p>
            
            <p><strong>Redes&nbsp;Sociales:</strong>&nbsp;Idalia&nbsp;L&oacute;pez&nbsp;Casta&ntilde;eda,&nbsp;Alejandra&nbsp;Mundo&nbsp;N&aacute;jera&nbsp;y&nbsp;Tania&nbsp;Murillo</p>
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
            'creditos'=>'
            <p><strong>CR&Eacute;DITOS</strong></p>

<p><strong>Gesti&oacute;n&nbsp;Y&nbsp;Coordinaci&oacute;n:</strong>&nbsp;Tania&nbsp;Murillo&nbsp;Tovar</p>

<p><strong>Producci&oacute;n&nbsp;y&nbsp;Materiales&nbsp;:</strong>&nbsp;Alejandra&nbsp;Mundo&nbsp;N&aacute;jera</p>

<p><strong>Asesor&nbsp;de&nbsp;Cultura&nbsp;de&nbsp;la&nbsp;Discapacidad&nbsp;e&nbsp;Inclusi&oacute;n&nbsp;y&nbsp;Evaluaci&oacute;n&nbsp;de&nbsp;la&nbsp;Metodolog&iacute;a:</strong>&nbsp;Mar&iacute;a&nbsp;Luisa&nbsp;Vega&nbsp;Monroy.</p>

            ',
            'quote'=>'Se impartió una capacitación sobre cultura de la discapacidad como preparación para los docentes y auxiliares en el Liceo Michoacano. ',
        ]);
    }
}
