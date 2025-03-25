<?php 
require_once("repository/userRepository.php");
class UserController{
    public function showLogin(){
        include_once("view/login.php");
    }

    public function validate(){
        //Llamar a base de datos
        $repository = new UserRepository();
        $user = $repository->validate($_REQUEST['name'], md5($_REQUEST['pass']));

        if(isset($user)){
            echo "Usario logueado";
            header("Location:" . BASE_URL . "/airport/list");
        }
        else{
            echo "Usuario no existe";
        }

    }
}

?>