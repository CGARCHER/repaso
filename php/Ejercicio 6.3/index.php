<?php

include_once 'articulo.php';

$articulo = new Articulo();
$articulo->mostrar();
$articulo = new Articulo('USB112',"Pendrive", 5.11);
$articulo->mostrar();

?>