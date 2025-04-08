<?php

use PSpell\Config;

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

    public function delete($id){
        $conex = (new ConfigDB)->getInstance();
        $sql = "DELETE FROM article WHERE id = ?";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1, $id);
        return $consulta->execute();
    }

    public function update($stock, $id){
        $conex = (new ConfigDB)->getInstance();
        $sql = "UPDATE article SET stock = ? where id = ?";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1,$stock);
        $consulta->bindValue(2,$id);
        return $consulta->execute();
    }
    
    
    public function verify($name)
    {
        $conex = (new ConfigDB)->getInstance();
        $sql = "SELECT count(*) FROM article WHERE name = ?";
        $query = $conex->prepare($sql);
        $query->bindValue(1, $name);
        $query->execute();
        return $query->fetchColumn()>0;
    }


    public function import($name, $description, $stock, $price)
    {
        $conex = (new ConfigDB)->getInstance();
        $sql = "INSERT INTO article (name, description, stock, price) VALUES (?,?,?,?)";
        $query = $conex->prepare($sql);
        $query->bindValue(1, $name);
        $query->bindValue(2, $description);
        $query->bindValue(3, $stock);
        $query->bindValue(4, $price);
        return $query->execute()>0;
    }

}

?>