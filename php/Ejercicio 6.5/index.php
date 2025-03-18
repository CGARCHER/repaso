<?php

include_once 'libro.php';

function prestar($libro, $cantidad){
    if($libro->prestamo($cantidad)){
        echo "prestado correctamente"."<br>";
    }
    else{
        echo "No te puedo prestar más"."<br>";
    }
    echo $libro;
}


function devolver($libro){
    if($libro->devolucion()){
        echo "libro devuelto correctamente"."<br>";
    }
    else{
        echo "No se puede devolver el libro"."<br>";
    }
    echo $libro;
}

$libro = new Libro();
$libro->setTitulo("Descubriendo mula");
$libro->setNumEjemplares(5);
$libro->setNumEjemplaresPrestados(3);

prestar($libro, 2);

/*prestar($libro);
prestar($libro);
prestar($libro);
devolver($libro);
prestar($libro);*/

?>