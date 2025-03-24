<?php
    #Se define una constante con la URL BASE, para poder acceder a los recursos
    #Se indica este fichero en el index.php
    $datos=  parse_ini_file('config.ini');
    if(isset($datos['base_url'])){
        define("BASE_URL", $datos['base_url']);
    }
?>