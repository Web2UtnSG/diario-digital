
<?php

function getDevelopers()
{

    $d1 = new stdClass();

    $d1->id = 'juan';
    $d1->nombre = "Juan Carlos Rojas";
    $d1->email = "juan@test.com";
    $d1->role = "Full Stack Developer";

    $d2 = new stdClass();

    $d2->id = 'alonso';
    $d2->nombre = "Alonso Chavarria";
    $d2->email = "alonso@test.com";
    $d2->role = "Full Stack Developer";

    $d3 = new stdClass();

    $d3->id = 'pedro';
    $d3->nombre = "Pedro Chavarria";
    $d3->email = "pedro@test.com";
    $d3->role = "Full Stack Developer";

    $devs = [$d1, $d2, $d3];

    return $devs;
}

function getDeveloperById($id){
    if (!$id) {
        return null;
    }
    $devs = getDevelopers();
    foreach ($devs as $dev) {
        if ($dev->id == $id) {
            return $dev;
        }
    }

    return null;
}

function getNoticias()
{

    $n1 = new stdClass();

    $n1->titulo = "Alajuelense y Saprissa inician lucha por el título nacional";
    $n1->contenido = "La Liga Deportiva Alajuelense recibe este sábado al Deportivo Saprissa en el duelo de ida de la final de segunda fase del Torneo de Clausura 2024. El compromiso en el Estadio Alejandro Morera Soto está pactado para las 8 pm. ";
    $n1->img = "https://pbs.twimg.com/media/GOLzIjNW8AAHYl3.jpg";

    $n2 = new stdClass();

    $n2->titulo = "Números y datos de fases finales en Costa Rica durante los últimos 20 torneos";
    $n2->contenido = "En la siguiente nota hacemos un repaso de los desenlaces que ha tenido el fútbol de Costa Rica en los últimos 20 torneos cortos en la primera división. ";
    $n2->img = "https://pbs.twimg.com/media/GONE2zjWYAAyaiG.jpg";

    $n3 = new stdClass();

    $n3->titulo = "Entradas para final en Tibás se agotaron como pan caliente y Juan Carlos Rojas saca pecho";
    $n3->contenido = "El Deportivo Saprissa sacó el martes a la venta las entradas para la final de vuelta de segunda fase contra la Liga Deportiva Alajuelense y en cuestión de minutos se agotaron. ";
    $n3->img = "https://pbs.twimg.com/media/GOL8tF9XsAAXxG_.jpg";

    $noticias = [$n1, $n2, $n3];

    return $noticias;
}

function getNoticiaById($id){
    $noticias = getNoticias();
    return $noticias[$id];
}
