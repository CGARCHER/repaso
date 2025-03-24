<?php 
require_once("repository/userRepository.php");
class UserController{
    public function showLogin(){
        include_once("view/login.php");
    }

    public function validate(){
        //Llamar a base de datos
        $repository = new UserRepository();
        $user = $repository->validate($_REQUEST['name'], $_REQUEST['pass']);

        if(isset($user)){
            echo "Usario logueado";
        }
        else{
            echo "Usuario no existe";
        }

    }
}

?>