<?php

require_once("repository/UserRepository.php");

class UserController{
    public function showLogin(){
        if(isset($_SESSION["logged"])){
            header("Location: " . BASE_URL . "/user/welcome");
        }else{
            require_once("view/login.php");
        }
        
        
    }

    public function validate(){
        $name = $_REQUEST["name"];
        $pass = $_REQUEST["pass"];
        

        $repository = new UserRepository();
        $user = $repository->validate($name, $pass);
        

        if($user){
            $_SESSION["logged"] = true;
            $_SESSION["name"] = $user->getName();
            header("Location: " . BASE_URL . "/articulo/welcome");
            require_once("view/footer.php");
        }else{
            echo "NO";
            require_once("view/footer.php");
        }
    }

    public function destroy(){
        session_unset();
        session_destroy();
        header("Location:" . BASE_URL . "/user/showLogin");
    }
}

?>