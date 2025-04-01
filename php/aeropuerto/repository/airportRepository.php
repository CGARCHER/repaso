<?php

require_once("config/configDB.php");
require_once("model/airport.php");

class AirportRepository {

    public function getAll()
    {
        $conex = (new ConfigDB())->getInstance();

        $sql = "SELECT * FROM airport";
        $consulta = $conex->prepare($sql);
        $consulta->execute();
        $listado = $consulta->fetchAll();
        $aeropuerto = [];
        
        foreach ($listado as $registro) {
            // También se puede poner con $registro["nombreCampoBD"].
            $aeropuerto[] = new Airport($registro[0],$registro[1], $registro[2], $registro[3]);
        }
        return $aeropuerto;
    }

    public function add($location, $numRoad, $gateway){

        $conex = (new ConfigDB())->getInstance();
        $sql = "INSERT INTO airport(location,numRoad,gateway) values(?,?,?)";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1,$location);
        $consulta->bindValue(2,$numRoad);
        $consulta->bindValue(3,$gateway);
        return $consulta->execute()>0;

    }

    public function existAirpoirtByLocation($location){
        $conex = (new ConfigDB())->getInstance();
        $sql = "SELECT count(location) FROM airport WHERE lower(location) = lower(?)";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1,$location);
        $consulta->execute();
        return $consulta->fetchColumn()>0;
    }

    public function delete($id)
    {
        $conex = (new ConfigDB())->getInstance();
        $sql = "DELETE FROM airport WHERE id = ?";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1,$id);
        return $consulta->execute()>0;
    }

    public function findById($id){
        $conex = (new ConfigDB())->getInstance();
        $sql = "SELECT * FROM airport WHERE id = ?";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1,$id);
        $consulta->execute();
        $aeropuerto = $consulta->fetch();

        return (!empty($aeropuerto)) ?
        new Airport($aeropuerto[0],$aeropuerto[1], $aeropuerto[2], $aeropuerto[3]) : null;
    }

    public function findByLocation($location){
        $conex = (new ConfigDB())->getInstance();
        $nombre = '%'.$location.'%';
        $sql = "SELECT * FROM airport WHERE lower(location) like lower(?)";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1,$nombre);
        $consulta->execute();
        $listado = $consulta->fetchAll();
        $aeropuerto = [];
        
        foreach ($listado as $registro) {
            // También se puede poner con $registro["nombreCampoBD"].
            $aeropuerto[] = new Airport($registro[0],$registro[1], $registro[2], $registro[3]);
        }
        return $aeropuerto;
    }


}


?>