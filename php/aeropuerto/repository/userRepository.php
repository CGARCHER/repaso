<?php
require_once("config/configDB.php");
require_once("model/user.php");

class UserRepository{

    public function validate($name, $pass){
        $conex = (new ConfigDB())->getInstance();

        $sql = "SELECT * FROM USER WHERE NAME=? AND PASS=?";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1, $name);
        $consulta->bindValue(2, md5($pass));
        $consulta->execute();
        $user = $consulta->fetch();

        if(isset($user)){
            var_dump($user);
            //Ver porque no vienen los valores en $user, falta algo
            return new User($user['id'], $user['name'],  $user['pass'],  $user['role']);
        }
        return null;        
    }
}
?>
