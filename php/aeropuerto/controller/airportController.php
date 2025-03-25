<?php

    require_once("repository/airportRepository.php");

class AirportController {

    public function showList()
    {
        $aeropuerto = (new AirportRepository())->getAll();
        require_once("view/airportList.php");
        
    }
}



?>