<?php

$PlatoTipo = ["1P" => "espanola", "2P" => "italiana",
 "3P" => "italiana", "4P" =>"japonesa","5P"=>"mulena"];

$PlatoDescripcion=["1P" => "Tortilla de patatas", "2P" => "Pizza",
"3P" => "Macarrones", "4P" =>"sushi","5P"=>"Muleñicos"]; 

$tipo = $_REQUEST['tipo'];
$encontrado=false;
foreach ($PlatoTipo as $key => $value) {
    if($value == $tipo){
        echo $key.' - '.$PlatoDescripcion[$key]. "<br>";
        $encontrado=true;
    }
}

if(!$encontrado){
    echo "No existe platos asociados a la cocina ".$tipo;
}


?>