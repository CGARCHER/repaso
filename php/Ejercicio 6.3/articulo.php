<?php

class Articulo{

    private $codigo;
    private $descripcion;
    private $pvp;

    public function __construct($codigo="",$descripcion="", $pvp=0)
    {
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->pvp = $pvp;
    }

    public function mostrar(){
        echo "Código : ". $this->codigo ."<br>";
        echo "Descripción : ". $this->descripcion ."<br>";
        echo "PVP : ". $this->pvp ."<br>";
    }

}
?>