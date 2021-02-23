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
        DB::table('productions')->insert([
            'titulo' => 'LA PRUDENCIA',
            
            'descripcion'=>'Duración de la obra: 45 minutos.
            Género: Comedia negra.
            Público a quién está dirigida: Adolescentes y adultos.
            Dramaturgia: Claudio Gotbeter
            Dirección: Tania Murillo
            Producción: Zinnia Compañía Escénica
            Reparto: Procella Romero, Landy Medina y Abril Cira.
            ',
            
            'sinopsis'=>'¡Año nuevo vida nueva! decretan Trinidad y Margarita al reunirse para festejar el año nuevo. 
            A pesar de sentirse enfermas de todo un poco, brindan y desean entusiasmadas que este año sea mejor que 
            el anterior. Alguien toca a la puerta, ¿quién será? dudan, se angustian, ¿abro? El miedo y la paranoia 
            por la inseguridad que vivimos no les deja más remedio que recurrir a… La prudencia.',
            'masinfo'=>'Equipo Creativo
            Asistente General: Laura Camacho
            Diseño y atrezo de escenografía: Abigail Araoz y Tania Murillo
            Realización de escenografía: Raúl Medina Ríos (Gigio) y el Sr. Leonel
            Iluminación: Raúl Medina Ríos (Gigio)
            Diseño cartel y edición de video: Tania Murillo
            Tipografía base: LAMIA DOP
            Fotografía de estudio: Sebastián Portillo-FOTOVIVA
            Fotografía escénica: Fausto Jijón
            Gestión Cultural: Procella Romero
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
            
            'fechas'=>'2021-2018',
            
            'criticas'=>'',
            
            'quote'=>'',
            
            'tipo'=>'producción',
        ]);

        DB::table('productions')->insert([
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

            'reconocimientos'=>'PACMYC 2020',
            'fecha'=>'2021-2020',
            'criticas'=>'',
            'quote'=>'',
            'tipo'=>'producción',
        ]);

        DB::table('productions')->insert([
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
            
            'reconocimientos'=>'Ganadora de Mejor Texto Dramático, CICLO INCIERTO TBK 2019',
            
            'fecha'=>'2021-2018',
            
            'criticas'=>'',
            
            'quote'=>'',
            
            'tipo'=>'coproducción',

            'contacto'=>'https://www.facebook.com/DIRECTOR-GENERAL-EPITAFIOS-LABORATORIO-TEATRAL-1394836570770145'
        ]);

        DB::table('productions')->insert([
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
            'tipo'=>'',
        ]);

        DB::table('productions')->insert([
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
