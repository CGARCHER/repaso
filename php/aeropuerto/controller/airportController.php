<?php

require_once("repository/airportRepository.php");

class AirportController
{
    private $airportRepository;

    public function __construct() {
        $this->airportRepository = new AirportRepository();
    }

    public function showList()
    {
        $aeropuertos = $this->airportRepository->getAll();
        require_once("view/airportHeader.php");
        require_once("view/airportList.php");
        require_once("view/airportFooter.php");
    }

    public function showAdd()
    {
        require_once("view/airportHeader.php");
        require_once("view/airportInsert.php");
        require_once("view/airportFooter.php");
    }

    public function add()
    {
        //Recupero los valores del formulario
        $location =  $_REQUEST['location'];
        $numRoad =  $_REQUEST['numRoad'];
        $gateway =  $_REQUEST['gateway'];

        //Compruebo si existe la localización
        if(!$this->airportRepository->existAirpoirtByLocation($_REQUEST['location'])){
            $this->insertBD($location, $numRoad, $gateway);
        }
        else{
            //Muestro por pantalla si ya existe la localización
            $_SESSION['message'] = 'Ya exista la localización ' . $_REQUEST['location'];
            $this->showAdd();
        }
    }

    private function insertBD($location, $numRoad, $gateway){
        $status = $this->airportRepository->add(
            $location,
            $numRoad,
            $gateway
        );
        
        if ($status) {
            //Redireccionar a mi listado de aeropuerto
            $_SESSION['message'] 
                = 'Se ha insertado el aeropuerto ' . $location . ' correctamente';
            header("Location:" . BASE_URL . "/airport/list");
        }
    }

    public function welcome()
    {
        require_once("view/airportHeader.php");
        echo "Bienvenido " . $_SESSION['name'] . ", seleccione una opción.";
        require_once("view/airportFooter.php");
    }

    public function deleteAirport()
    {
        $id = $_REQUEST['id'];
        $aeropuerto = $this->airportRepository->findById($id);
        if(isset($aeropuerto)){
            if($this->airportRepository->delete($id)){
                $_SESSION['message'] = 'Aeropuerto '.$aeropuerto->getLocation(). ' Borrado Correctamente';
            }
            else{
                $_SESSION['message'] = 'Error al eliminar el aeropuerto '.$aeropuerto->getLocation();
            }
            header("Location:" . BASE_URL . "/airport/list");
        }
    }
    public function showSearch()
    {
        require_once("view/airportHeader.php");
        require_once("view/airportSearch.php");
        require_once("view/airportFooter.php");
    }

    public function search()
    {
        $location = $_REQUEST['location'];
        $aeropuertos = $this->airportRepository->findByLocation($location); 
        
        if(empty($aeropuertos)){
            $_SESSION['message'] = 'No se ha encontrado aeropuerto con Location = '.$location;
        }
        
        require_once("view/airportHeader.php");
        require_once("view/airportSearch.php");
        require_once("view/airportList.php");
        require_once("view/airportFooter.php");

    }

    public function showUpdateAirport()
    {
        $id = $_REQUEST['id'];
        $aeropuerto = $this->airportRepository->findById($id);
        require_once("view/airportHeader.php");
        require_once("view/airportUpdate.php");
        require_once("view/airportFooter.php");
    }

    public function updateAirport(){

        //Recupero los valores del formulario
        $id =  $_REQUEST['id'];
        $location =  $_REQUEST['location'];
        $numRoad =  $_REQUEST['numRoad'];
        $gateway =  $_REQUEST['gateway'];

        $status = $this->airportRepository->update($id, $location, $numRoad, $gateway);

        
        if ($status) {
            //Redireccionar a mi listado de aeropuerto
            $_SESSION['message'] 
                = 'Se ha actualizado el aeropuerto ' . $location . ' correctamente';
            header("Location:" . BASE_URL . "/airport/list");
        }
        else{
            //Fallo, me quedo en el formulario de actualizar
            $_SESSION['message'] 
            = 'No se ha actualizado el aeropuerto ' . $location . ' correctamente';
            $this->showUpdateAirport($id);
        }

    }

    public function showImport(){
        require_once("view/airportHeader.php");
        require_once("view/airportImport.php");
        require_once("view/airportFooter.php");
    }

    public function import(){
        $file = $_FILES['file'];
        $contenido = file_get_contents($file['tmp_name']);
        $aeropuertos = explode("\n", $contenido);
        foreach ($aeropuertos as $value) {
            $datos_aeropuerto = explode(",", $value);
            print_r($datos_aeropuerto);
            $this->airportRepository->add($datos_aeropuerto[0],
                        $datos_aeropuerto[1], $datos_aeropuerto[2]);
        }
        header("Location:" . BASE_URL . "/airport/list");

    }

}
