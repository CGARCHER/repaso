<?php
require_once("model/user.php");
require_once("config/configDB.php");
class UserRepository{
    public function validate($name, $pass){
        $conex = (new ConfigDB())->getInstance();
        $sql = "SELECT * FROM user WHERE name = ? AND pass = ?";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1, $name);
        $consulta->bindValue(2, md5($pass));
        $consulta->execute();
        $user = $consulta->fetch();

        return !empty($user) ? new User($user[0], $user[1], $user[2], $user[3]) : null; 
    }
}

?>