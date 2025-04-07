<?php
require_once("model/articulo.php");
require_once("config/configDB.php");
class ArticleRepository{
    public function getAll(){
        $conex = (new ConfigDB())->getInstance();
        $sql = "SELECT * FROM article";
        $consulta = $conex->prepare($sql);
        $consulta->execute();
        $articulos = $consulta->fetchAll();

        $arrSalida = [];
        
        foreach ($articulos as $element) {
            $arrSalida[] = new Articulo($element[0], $element[1], $element[2], $element[3], $element[4]);
        }

        return $arrSalida;
    }
}

?>