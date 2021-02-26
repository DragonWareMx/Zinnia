<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('productions')->insert([
            'titulo' => 'LA PRUDENCIA',
            
            'descripcion'=>'<table border="0" cellpadding="1" cellspacing="1" style="width:500px">
                <tbody>
                    <tr>
                        <td>
                        <p><strong>Duraci&oacute;n&nbsp;de&nbsp;la&nbsp;obra</strong></p>
            
                        <p>45&nbsp;minutos.</p>
                        </td>
                        <td>
                        <p><strong>G&eacute;nero</strong></p>
            
                        <p>Comedia&nbsp;negra.</p>
                        </td>
                        <td>
                        <p><strong>P&uacute;blico&nbsp;a&nbsp;qui&eacute;n&nbsp;est&aacute;&nbsp;dirigida</strong></p>
            
                        <p>Adolescentes&nbsp;y&nbsp;adultos.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <p><strong>Dramaturgia</strong></p>
            
            <p>Claudio&nbsp;Gotbeter</p>
            
            <p><strong>Direcci&oacute;n</strong></p>
            
            <p>Tania&nbsp;Murillo</p>
            
            <p><strong>Producci&oacute;n</strong></p>
            
            <p>Zinnia&nbsp;Compa&ntilde;&iacute;a&nbsp;Esc&eacute;nica</p>
            
            <p><strong>Reparto</strong></p>
            
            <p>Procella&nbsp;Romero,&nbsp;Landy&nbsp;Medina&nbsp;y&nbsp;Abril&nbsp;Cira.</p>
            ',
            
            'sinopsis'=>'¡Año nuevo vida nueva! decretan Trinidad y Margarita al reunirse para festejar el año nuevo. 
            A pesar de sentirse enfermas de todo un poco, brindan y desean entusiasmadas que este año sea mejor que 
            el anterior. Alguien toca a la puerta, ¿quién será? dudan, se angustian, ¿abro? El miedo y la paranoia 
            por la inseguridad que vivimos no les deja más remedio que recurrir a… La prudencia.',
            
            'masinfo'=>'<p><strong>EQUIPO CREATIVO</strong></p>

            <p><strong>Asistente&nbsp;General:</strong>&nbsp;Laura&nbsp;Camacho</p>
            
            <p><strong>Dise&ntilde;o&nbsp;y&nbsp;atrezo&nbsp;de&nbsp;escenograf&iacute;a:</strong>&nbsp;Abigail&nbsp;Araoz&nbsp;y&nbsp;Tania&nbsp;Murillo</p>
            
            <p><strong>Realizaci&oacute;n&nbsp;de&nbsp;escenograf&iacute;a:</strong>&nbsp;Ra&uacute;l&nbsp;Medina&nbsp;R&iacute;os&nbsp;(Gigio)&nbsp;y&nbsp;el&nbsp;Sr.&nbsp;Leonel</p>
            
            <p><strong>Iluminaci&oacute;n:</strong>&nbsp;Ra&uacute;l&nbsp;Medina&nbsp;R&iacute;os&nbsp;(Gigio)</p>
            
            <p><strong>Dise&ntilde;o&nbsp;cartel&nbsp;y&nbsp;edici&oacute;n&nbsp;de&nbsp;video:</strong>&nbsp;Tania&nbsp;Murillo</p>
            
            <p><strong>Tipograf&iacute;a&nbsp;base:</strong>&nbsp;LAMIA&nbsp;DOP</p>
            
            <p><strong>Fotograf&iacute;a&nbsp;de&nbsp;estudio:</strong>&nbsp;Sebasti&aacute;n&nbsp;Portillo-FOTOVIVA</p>
            
            <p><strong>Fotograf&iacute;a&nbsp;esc&eacute;nica:</strong>&nbsp;Fausto&nbsp;Jij&oacute;n</p>
            
            <p><strong>Gesti&oacute;n&nbsp;Cultural:</strong>&nbsp;Procella&nbsp;Romero</p>
            ',
            
            'reconocimientos'=>'Obra seleccionada para participar en la Muestra Estatal de Teatro Michoacán 2021/ 
            Ganadora de la Convocatoria Sala Virtual 2021 Voy al Teatro, Jalisco/ 
            Obra seleccionada para ser parte del Banco de Proyectos de CREADORES DE PAZ del Centro Occidente/
            Proyecto seleccionado en la convocatoria México Encuentro de las Artes Escénicas (ENARTES) FONCA 2020, 
            Obra seleccionada en el Ciclo Teatro de los Estados 2020, Teatro La Capilla, CDMX/ Producción seleccionada 
            en el Programa Cultura de Paz dentro del proyecto Promoción del Teatro en Michoacán 2019/ Proyecto beneficiado
            por el Programa de Estímulos a la Creación y Desarrollo Artístico de Michoacán (PECDAM 2018) 
            Gira por el interior del Estado de Michoacán en el rubro de Difusión de las Artes Escénicas.
            ',

            'n_reconocimientos'=>6,
            
            'fecha'=>'2021-2018',
            
            'criticas'=>'
            <p>&ldquo;Murillo&nbsp;logra&nbsp;que&nbsp;tanto&nbsp;los&nbsp;deliciosos&nbsp;momentos&nbsp;clownescos&nbsp;de&nbsp;sus&nbsp;actrices&nbsp;como&nbsp;las&nbsp;desgarradoras&nbsp;se&ntilde;ales&nbsp;de&nbsp;un&nbsp;horror&nbsp;demasiado&nbsp;real,&nbsp;demasiado&nbsp;humano,&nbsp;que&nbsp;habita&nbsp;en&nbsp;el&nbsp;fondo&nbsp;de&nbsp;esta&nbsp;obra,&nbsp;se&nbsp;experimente&nbsp;siempre&nbsp;en&nbsp;un&nbsp;inc&oacute;modo&nbsp;-demasiado&nbsp;cerca-.&rdquo;</p>

<p><a href="https://sinestesiaescenica.wordpress.com/2018/05/31/la-prudencia-compania-escenica-zinnia/">Said&nbsp;Soberanes-Sinestesia&nbsp;Esc&eacute;nica</a></p>

<p>&quot;Estrenan&nbsp;a&nbsp;nivel&nbsp;nacional&nbsp;a&nbsp;cargo&nbsp;de&nbsp;Zinnia&nbsp;Compa&ntilde;&iacute;a&nbsp;Esc&eacute;nica&nbsp;la&nbsp;obra&nbsp;La&nbsp;Prudencia,&nbsp;que&nbsp;versar&aacute;&nbsp;sobre&nbsp;la&nbsp;inseguridad&nbsp;que&nbsp;se&nbsp;vive&nbsp;en&nbsp;el&nbsp;pa&iacute;s.&quot;</p>

<p><a href="https://www.quadratin.com.mx/cultura/estrenaran-en-el-pais-la-obra-sobre-la-inseguridad-la-prudencia/">Luis&nbsp;Felipe&nbsp;Reynos.o-Quadrat&iacute;n</a></p>

<p>&quot;As&iacute;,&nbsp;como&nbsp;una&nbsp;comedia&nbsp;en&eacute;rgica&nbsp;y&nbsp;audaz&nbsp;que&nbsp;se&nbsp;mantiene&nbsp;durante&nbsp;toda&nbsp;la&nbsp;funci&oacute;n&nbsp;es&nbsp;que&nbsp;se&nbsp;present&oacute;&nbsp;La&nbsp;Prudencia&hellip;&nbsp;Con&nbsp;un&nbsp;estilo&nbsp;fresco&nbsp;pero&nbsp;contundente...&quot;</p>

<p><a href="https://www.cxpress.mx/la-prudencia-en-una-sociedad-atemorizada-por-la-inseguridad/">Davo&nbsp;Pinks-CXPRESS&nbsp;Cartelera,&nbsp;Teatro,&nbsp;Conciertos,&nbsp;Cultura</a></p>

<p>&quot;Clara&nbsp;muestra&nbsp;del&nbsp;humor&nbsp;cl&aacute;sico&nbsp;trasladado&nbsp;a&nbsp;un&nbsp;problema&nbsp;social&hellip;&nbsp;La&nbsp;energ&iacute;a&nbsp;en&nbsp;el&nbsp;escenario&nbsp;es&nbsp;incre&iacute;ble,&nbsp;TODO&nbsp;el&nbsp;tiempo&nbsp;est&aacute;n&nbsp;a&nbsp;full&nbsp;y&nbsp;eso&nbsp;se&nbsp;agradece&nbsp;enormemente...&quot;</p>

<p><a href="https://www.instagram.com/p/B790CM5jfBH/?igshid=u7g9fch5h5tj">Me&nbsp;interesa&nbsp;interesarte</a></p>

<p>&quot;Espl&eacute;ndidamente&nbsp;actuada&hellip;&nbsp;Los&nbsp;personajes&nbsp;de&nbsp;Gotbeter,&nbsp;caminan&nbsp;por&nbsp;la&nbsp;cuerda&nbsp;floja&nbsp;de&nbsp;la&nbsp;paranoia&nbsp;y&nbsp;esta&nbsp;cuerda&nbsp;est&aacute;&nbsp;sostenida&nbsp;en&nbsp;los&nbsp;postes&nbsp;de&nbsp;la&nbsp;comedia.&quot;</p>

<p><a href="http://www.instagram.com/p/B7xQcPQD1dp/?igshid=ngfadd8cw0c9">Desextender</a></p>

            ',
            
            'quote'=>'<p>&quot;Clara&nbsp;muestra&nbsp;del&nbsp;humor&nbsp;cl&aacute;sico&nbsp;trasladado&nbsp;a&nbsp;un&nbsp;problema&nbsp;social&hellip;&nbsp;La&nbsp;energ&iacute;a&nbsp;en&nbsp;el&nbsp;escenario&nbsp;es&nbsp;incre&iacute;ble,&nbsp;TODO&nbsp;el&nbsp;tiempo&nbsp;est&aacute;n&nbsp;a&nbsp;full&nbsp;y&nbsp;eso&nbsp;se&nbsp;agradece&nbsp;enormemente...&quot;</p>

            <p><a href="https://www.instagram.com/p/B790CM5jfBH/?igshid=u7g9fch5h5tj">Me&nbsp;interesa&nbsp;interesarte</a></p>',
            
            'tipo'=>'producción',
        ]);

        \DB::table('productions')->insert([
            'titulo' => 'SOMBRAS DE LA LENGUA,							
            Leyendas purépechas en teatro de sombras para la población infantil vulnerable
            ',

            'descripcion'=>'Duración de la obra: 50 min
            Público a quién está dirigida: Familiar, principalmente infantil.
            Dirección: Tania Murillo
            Producción: Zinnia Compañía Escénica
            Titiriteras: Procella Romero y Landy Medina
            ',

            'sinopsis'=>'Esta puesta en escena se sustenta en acercar principalmente al público infantil a la lengua 
            purépecha, su iconografía y música, a través de un espectáculo de teatro de títeres de sombra, basado en 
            tres leyendas purépechas: Origen del universo purépecha, Hapunda y el Lago y Profecía de la llegada de 
            los españoles.',

            'masinfo'=>'Equipo Creativo
            Adaptación Dramatúrgica Hapunda y el Lago: Zinnia Compañía Escénica basada en la versión de Catalina Miranda Hapunda la joven que vivía en la Isla de Yunuén
            Adaptación Dramatúrgica Origen del Universo Purépecha y Profecía de la llegada de los españoles: Norma Ferreira
            Diseño y Realización de Títeres de Sombra y Escenografía: Procella Romero
            Diseño y Realización de Máscaras: Landy Medina
            Diseño de Iluminación: Tania Murillo
            Música: Norma Ferreira
            Fotografía: Procella Romero
            Realización de Títeres y Escenografía: Zinnia Compañía Escénica
            ',
            'pdf'=>'',
            'reconocimientos'=>'PACMYC 2020',
            'fecha'=>'2021-2020',
            'criticas'=>'',
            'quote'=>'',
            'tipo'=>'producción',
        ]);

        \DB::table('productions')->insert([
            'titulo' => 'LA MUJER QUE MUEVE LA BALSA',

            'descripcion'=>'Equipo Creativo
            Dirección y dramaturgia: Josué Almanza
            Diseño de multimedia: Héctor Daniel Pérez
            Diseño de escenografía e iluminación: Elizabeth Alva
            Diseño de escenario multimedial y animaciones: Juan Diego Mejía
            Diseño sonoro: Daniel Pérez Vázquez
            Diseño de producción Argentina: Eleonora Pereyra
            Asistencia de dirección: Ludwig Berlinea
            Coproducción México: Epitafios Laboratorio Teatral y Zinnia Compañía Escénica
            ',
            
            'sinopsis'=>'La mujer que mueve la balsa es un proyecto de teatro documental inspirado en viajes y experiencias reales. Tres historias trágicas de migración y exilio en distintas partes del mundo, tres viajes cruzando fronteras y múltiples fotografías de la agonía de un mundo sofocado por la guerra y la insensibilidad frente a los muertos en los desiertos y en los mares.
            Público a quién está dirigida: Adolescentes y adultos.
            ',
            
            'masinfo'=>'Elenco presencial:
            Tania Murillo
            Procella Romero
            Mauricio González
            Cristina Giles
            Isaias Trani
            Alma López
            
            Elenco vía remota:
            Daniela Jaimes Borges
            Jennifer Ventura
            Romina Gatti
            Paulina Muñoz
            Liliana Santibañez
            Federico Lozano
            Isabel Benet
            ',
            'pdf'=>'',
            'reconocimientos'=>'Ganadora de Mejor Texto Dramático, CICLO INCIERTO TBK 2019',
            
            'fecha'=>'2021-2018',
            
            'criticas'=>'',
            
            'quote'=>'',
            
            'tipo'=>'coproducción',

            'contacto'=>'https://www.facebook.com/DIRECTOR-GENERAL-EPITAFIOS-LABORATORIO-TEATRAL-1394836570770145'
        ]);

        \DB::table('productions')->insert([
            'titulo' => 'ÉRASE QUE SE ES… EN AFGANISTÁN',
            'descripcion'=>'',
            'sinopsis'=>'Dispositivo escénico en el que Norma Ferreira a través de anécdotas, 
            música, fotografías, videos y registros sonoros, comparte sus experiencias en Afganistán, 
            donde trabajó como profesora de música durante cinco años. Testimonios, registros audiovisuales 
            y sonoros se entretejen con cuentos tradicionales afganos, narrados visualmente con un teatro de 
            sombras hecho con un retroproyector. El centro del dispositivo escénico es la pantalla de proyección 
            en la cual personajes mágicos se yuxtaponen a paisajes existentes, creando un universo visual híbrido 
            entre lo real y lo imaginario. El espectáculo abre una ventana que nos muestra otra perspectiva de 
            Afganistán, distinta a la que vemos en las noticias y nos adentra a la gran riqueza cultural que 
            tiene ese país.
            ',
            'masinfo'=>'',
            'pdf'=>'',
            'reconocimientos'=>'Programa “Contigo en la Distancia: Movimiento de Arte en Casa” 2020, 
            Secretaria de Cultura Federal.
            ',
            'fecha'=>'2020-2019',
            'criticas'=>'',
            'quote'=>'',
            'tipo'=>'producción',
        ]);

        \DB::table('productions')->insert([
            'titulo' => 'LA GALLINA TONTA',
            'descripcion'=>'Duración de la obra: 50 min
            Duración de la obra: 13 min. (versión en línea)
            Público a quién está dirigida: Todo tipo
            Idea original y Dirección Artística: Norma Ferreira
            Dirección Escénica y Titiritera: Tania Murillo
            Coproducción: Maleta en Ristra y Zinnia Compañía Escénica
            ',
            'sinopsis'=>'Adaptación del cuento del escritor Idris Sha. En un país muy lejano vivía una gallina
             muy tonta que andaba por allí haciendo toc, toc, toc. Nadie en el pueblo sabía lo que la gallina 
             quería decir y todos estaban en calma; hasta que un día... la gallina aprende a hablar 
             “el lenguaje humano” y crea una terrible confusión entre los habitantes del pueblo.
            ',
            'masinfo'=>'Elenco
            Narradora: Norma Ferreira
            Titiriteras: Tania Murillo y Ale Muna
            
            Equipo Creativo
            Dramaturgia: Norma Ferreira adaptación libre del cuento de Idris She
            Diseño de Títeres: Ale Muna
            Creación sonora: Norma Ferreira
            Video y Fotografía: Norma Ferreira y Owen Breull
            ',
            'pdf'=>'',
            'reconocimientos'=>'',
            'fecha'=>'',
            'criticas'=>'',
            'quote'=>'',
            'tipo'=>'coproducción',
            'contacto'=>'Norma Ferreira
            maletaenristra@gmail.com
            Cel (443) 4959601
            Facebook La Maleta en Ristra 
            https://www.facebook.com/maletaenristra
            '
        ]);
    }
}
