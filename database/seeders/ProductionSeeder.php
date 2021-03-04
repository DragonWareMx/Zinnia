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
            
            'descripcion'=>'
            
            <p><strong>Dramaturgia</strong></p>
            
            <p>Claudio&nbsp;Gotbeter</p>
            
            <p><strong>Direcci&oacute;n</strong></p>
            
            <p>Tania&nbsp;Murillo</p>
            
            <p><strong>Producci&oacute;n</strong></p>
            
            <p>Zinnia&nbsp;Compa&ntilde;&iacute;a&nbsp;Esc&eacute;nica</p>
            
            <p><strong>Reparto</strong></p>
            
            <p>Procella&nbsp;Romero,&nbsp;Landy&nbsp;Medina&nbsp;y&nbsp;Abril&nbsp;Cira.</p>
            ',
            'maindata'=>'<table border="0" cellpadding="1" cellspacing="1" style="width:500px">
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
            'titulo' => 'SOMBRAS DE LA LENGUA',

            'descripcion'=>'

            <p><strong>Producci&oacute;n</strong></p>

            <p>Zinnia&nbsp;Compa&ntilde;&iacute;a&nbsp;Esc&eacute;nica</p>

            <p><strong>Titiriteras</strong></p>

            <p>Procella&nbsp;Romero&nbsp;y&nbsp;Landy&nbsp;Medina</p>

            ',

            'maindata'=>'
            <table border="0" cellpadding="1" cellspacing="1" style="width:500px">
                <tbody>
                    <tr>
                        <td>
                        <p><strong>Duraci&oacute;n&nbsp;de&nbsp;la&nbsp;obra</strong></p>

                        <p>50 minutos.</p>
                        </td>
                        <td>
                        <p><strong>Direcci&oacute;n</strong></p>

                        <p>Tania&nbsp;Murillo</p>
                        </td>
                        <td>
                        <p><strong>P&uacute;blico&nbsp;a&nbsp;qui&eacute;n&nbsp;est&aacute;&nbsp;dirigida</strong></p>

                        <p>Familiar,&nbsp;principalmente&nbsp;infantil.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            ',

            'sinopsis'=>'Esta puesta en escena se sustenta en acercar principalmente al público infantil a la lengua 
            purépecha, su iconografía y música, a través de un espectáculo de teatro de títeres de sombra, basado en 
            tres leyendas purépechas: Origen del universo purépecha, Hapunda y el Lago y Profecía de la llegada de 
            los españoles.',

            'masinfo'=>'
            <p><strong>EQUIPO CREATIVO</strong></p>

            <p><strong>Adaptaci&oacute;n&nbsp;Dramat&uacute;rgica&nbsp;Hapunda&nbsp;y&nbsp;el&nbsp;Lago:</strong>&nbsp;Zinnia&nbsp;Compa&ntilde;&iacute;a&nbsp;Esc&eacute;nica&nbsp;basada&nbsp;en&nbsp;la&nbsp;versi&oacute;n&nbsp;de&nbsp;Catalina&nbsp;Miranda&nbsp;Hapunda&nbsp;la&nbsp;joven&nbsp;que&nbsp;viv&iacute;a&nbsp;en&nbsp;la&nbsp;Isla&nbsp;de&nbsp;Yunu&eacute;n</p>

            <p><strong>Adaptaci&oacute;n&nbsp;Dramat&uacute;rgica&nbsp;Origen&nbsp;del&nbsp;Universo&nbsp;Pur&eacute;pecha&nbsp;y&nbsp;Profec&iacute;a&nbsp;de&nbsp;la&nbsp;llegada&nbsp;de&nbsp;los&nbsp;espa&ntilde;oles:</strong>&nbsp;Norma&nbsp;Ferreira</p>

            <p><strong>Dise&ntilde;o&nbsp;y&nbsp;Realizaci&oacute;n&nbsp;de&nbsp;T&iacute;teres&nbsp;de&nbsp;Sombra&nbsp;y&nbsp;Escenograf&iacute;a:</strong>&nbsp;Procella&nbsp;Romero</p>

            <p><strong>Dise&ntilde;o&nbsp;y&nbsp;Realizaci&oacute;n&nbsp;de&nbsp;M&aacute;scaras:</strong>&nbsp;Landy&nbsp;Medina</p>

            <p><strong>Dise&ntilde;o&nbsp;de&nbsp;Iluminaci&oacute;n:</strong>&nbsp;Tania&nbsp;Murillo</p>

            <p><strong>M&uacute;sica:</strong>&nbsp;Norma&nbsp;Ferreira</p>

            <p><strong>Fotograf&iacute;a:</strong>&nbsp;Procella&nbsp;Romero</p>

            <p><strong>Realizaci&oacute;n&nbsp;de&nbsp;T&iacute;teres&nbsp;y&nbsp;Escenograf&iacute;a:</strong>&nbsp;Zinnia&nbsp;Compa&ntilde;&iacute;a&nbsp;Esc&eacute;nica</p>
            ',
            'pdf'=>'',
            'reconocimientos'=>'PACMYC 2020',
            'n_reconocimientos'=>1,
            'fecha'=>'2021-2020',
            'criticas'=>'',
            'quote'=>'',
            'tipo'=>'producción',
        ]);

        \DB::table('productions')->insert([
            'titulo' => 'LA MUJER QUE MUEVE LA BALSA',

            'descripcion'=>'
            <p><strong>Dise&ntilde;o&nbsp;de&nbsp;multimedia</strong></p>

            <p>H&eacute;ctor&nbsp;Daniel&nbsp;P&eacute;rez</p>

            <p><strong>Dise&ntilde;o&nbsp;de&nbsp;escenograf&iacute;a&nbsp;e&nbsp;iluminaci&oacute;n</strong></p>

            <p>Elizabeth&nbsp;Alva</p>

            <p><strong>Dise&ntilde;o&nbsp;de&nbsp;escenario&nbsp;multimedial&nbsp;y&nbsp;animaciones</strong></p>

            <p>Juan&nbsp;Diego&nbsp;Mej&iacute;a</p>

            <p><strong>Dise&ntilde;o&nbsp;sonoro</strong></p>

            <p>Daniel&nbsp;P&eacute;rez&nbsp;V&aacute;zquez</p>

            <p><strong>Dise&ntilde;o&nbsp;de&nbsp;producci&oacute;n&nbsp;Argentina</strong></p>

            <p>Eleonora&nbsp;Pereyra</p>
            ',

            'maindata'=>'
            <p><strong>EQUIPO CREATIVO</strong></p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:500px">
                <tbody>
                    <tr>
                        <td>
                        <p><strong>Direcci&oacute;n&nbsp;y&nbsp;dramaturgia</strong></p>

                        <p>Josu&eacute;&nbsp;Almanza</p>
                        </td>
                        <td>
                        <p><strong>Asistencia&nbsp;de&nbsp;direcci&oacute;n</strong></p>

                        <p>Ludwig&nbsp;Berlinea</p>
                        </td>
                        <td>
                        <p><strong>Coproducci&oacute;n&nbsp;M&eacute;xico</strong></p>

                        <p>Epitafios&nbsp;Laboratorio&nbsp;Teatral&nbsp;y&nbsp;Zinnia&nbsp;Compa&ntilde;&iacute;a&nbsp;Esc&eacute;nica</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            ',
            
            'sinopsis'=>'La mujer que mueve la balsa es un proyecto de teatro documental inspirado en viajes y experiencias reales. Tres historias trágicas de migración y exilio en distintas partes del mundo, tres viajes cruzando fronteras y múltiples fotografías de la agonía de un mundo sofocado por la guerra y la insensibilidad frente a los muertos en los desiertos y en los mares.
            Público a quién está dirigida: Adolescentes y adultos.
            ',
            
            'masinfo'=>'
            <p><strong>Elenco&nbsp;presencial:</strong></p>

            <p>Tania&nbsp;Murillo</p>

            <p>Procella&nbsp;Romero</p>

            <p>Mauricio&nbsp;Gonz&aacute;lez</p>

            <p>Cristina&nbsp;Giles</p>

            <p>Isaias&nbsp;Trani</p>

            <p>Alma&nbsp;L&oacute;pez&nbsp; &nbsp;</p>

            <p><strong>Elenco&nbsp;v&iacute;a&nbsp;remota:</strong></p>

            <p>Daniela&nbsp;Jaimes&nbsp;Borges</p>

            <p>Jennifer&nbsp;Ventura</p>

            <p>Romina&nbsp;Gatti</p>

            <p>Paulina&nbsp;Mu&ntilde;oz</p>

            <p>Liliana&nbsp;Santiba&ntilde;ez</p>

            <p>Federico&nbsp;Lozano</p>

            <p>Isabel&nbsp;Benet</p>
            ',
            'pdf'=>'',
            'reconocimientos'=>'Ganadora de Mejor Texto Dramático, CICLO INCIERTO TBK 2019',

            'n_reconocimientos'=>1,
            
            'fecha'=>'2021-2018',
            
            'criticas'=>'',
            
            'quote'=>'',
            
            'tipo'=>'coproducción',

            'contacto'=>'https://www.facebook.com/DIRECTOR-GENERAL-EPITAFIOS-LABORATORIO-TEATRAL-1394836570770145'
        ]);

        \DB::table('productions')->insert([
            'titulo' => 'ÉRASE QUE SE ES… EN AFGANISTÁN',
            'descripcion'=>'',
            'maindata'=>'',
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
            'n_reconocimientos'=>1,
            'fecha'=>'2020-2019',
            'criticas'=>'',
            'quote'=>'',
            'tipo'=>'producción',
        ]);

        \DB::table('productions')->insert([
            'titulo' => 'LA GALLINA TONTA',
            'descripcion'=>'
            <p><strong>Idea&nbsp;original&nbsp;y&nbsp;Direcci&oacute;n&nbsp;Art&iacute;stica</strong></p>

            <p>Norma&nbsp;Ferreira</p>

            <p><strong>Direcci&oacute;n&nbsp;Esc&eacute;nica&nbsp;y&nbsp;Titiritera</strong></p>

            <p>Tania&nbsp;Murillo</p>

            <p><strong>Coproducci&oacute;n</strong></p>

            <p>Maleta&nbsp;en&nbsp;Ristra&nbsp;y&nbsp;Zinnia&nbsp;Compa&ntilde;&iacute;a&nbsp;Esc&eacute;nica</p>
            ',
            'maindata'=>'
            <table border="0" cellpadding="1" cellspacing="1" style="width:500px">
                <tbody>
                    <tr>
                        <td>
                        <p><strong>Duraci&oacute;n&nbsp;de&nbsp;la&nbsp;obra</strong></p>

                        <p>50 minutos</p>
                        </td>
                        <td>
                        <p><strong>Duraci&oacute;n&nbsp;de&nbsp;la&nbsp;obra</strong></p>

                        <p>13&nbsp;minutos&nbsp;(versi&oacute;n&nbsp;en&nbsp;l&iacute;nea)</p>
                        </td>
                        <td>
                        <p><strong>P&uacute;blico&nbsp;a&nbsp;qui&eacute;n&nbsp;est&aacute;&nbsp;dirigida</strong></p>

                        <p>Todo&nbsp;tipo</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            ',
            'sinopsis'=>'Adaptación del cuento del escritor Idris Sha. En un país muy lejano vivía una gallina
             muy tonta que andaba por allí haciendo toc, toc, toc. Nadie en el pueblo sabía lo que la gallina 
             quería decir y todos estaban en calma; hasta que un día... la gallina aprende a hablar 
             “el lenguaje humano” y crea una terrible confusión entre los habitantes del pueblo.
            ',
            'masinfo'=>'
            <p><strong>Elenco</strong></p>

            <p><strong>Narradora:&nbsp;</strong>Norma&nbsp;Ferreira</p>

            <p><strong>Titiriteras:&nbsp;</strong>Tania&nbsp;Murillo&nbsp;y&nbsp;Ale&nbsp;Muna</p>

            <p><strong>Equipo&nbsp;Creativo</strong></p>

            <p><strong>Dramaturgia:</strong>&nbsp;Norma&nbsp;Ferreira&nbsp;adaptaci&oacute;n&nbsp;libre&nbsp;del&nbsp;cuento&nbsp;de&nbsp;Idris&nbsp;She</p>

            <p><strong>Dise&ntilde;o&nbsp;de&nbsp;T&iacute;teres:</strong>&nbsp;Ale&nbsp;Muna</p>

            <p><strong>Creaci&oacute;n&nbsp;sonora:</strong>&nbsp;Norma&nbsp;Ferreira</p>

            <p><strong>Video&nbsp;y&nbsp;Fotograf&iacute;a:</strong>&nbsp;Norma&nbsp;Ferreira&nbsp;y&nbsp;Owen&nbsp;Breull</p>

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
