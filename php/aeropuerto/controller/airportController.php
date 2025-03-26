<?php

    require_once("repository/airportRepository.php");

class AirportController {


    public function showList()
    {
        $aeropuerto = (new AirportRepository())->getAll();
        require_once("view/airportList.php");
        
    }

    public function welcome()
    {
        require_once("view/airportHeader.php");
        echo "Bienvenido " . $_SESSION['name'] . ", seleccione una opción.";
        require_once("view/airportFooter.php");
    }
}



?>