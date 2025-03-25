<?php
require_once("repository/userRepository.php");
class UserController
{
    public function showLogin()
    {
        if (!isset($_SESSION['logged'])) {
            include_once("view/login.php");
        } else {
            (new AirportController())->showList();            
        }
    }

    public function validate()
    {
        //Llamar a base de datos
        $repository = new UserRepository();
        $user = $repository->validate($_REQUEST['name'], md5($_REQUEST['pass']));

        if (isset($user)) {
            $_SESSION['logged'] = true;
            echo "Usario logueado";
            // header("Location:" . BASE_URL . "/airport/list");
            // Alternativa para redirigir.
            (new AirportController())->showList();
        } else {
            echo "Usuario no existe";
        }
    }
}
