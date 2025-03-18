<?php

function buscarPelis($peliculas, $pelicula){
    echo "Peliculas encontradas: "."<br>";
    $conta = 0;
    foreach ($peliculas as $peli) {
        if(str_contains(strtolower($peli),strtolower($pelicula))){
            echo $peli."<br>";
            $conta++;
        }
    }

    if($conta == 0){
        echo "No se han encontrado peliculas con el texto ".$pelicula;
    }
}

$pelis = ["Titanic","Fast and Furious","Interstellar", "El libro de la selva"];
$text = $_REQUEST['texto'];
buscarPelis($pelis, $text)
?>