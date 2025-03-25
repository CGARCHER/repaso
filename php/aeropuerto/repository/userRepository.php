<?php
require_once("config/configDB.php");
require_once("model/user.php");

class UserRepository
{

    public function validate($name, $pass)
    {
        $conex = (new ConfigDB())->getInstance();

        $sql = "SELECT * FROM user WHERE NAME=? AND PASS=?";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1, $name);
        $consulta->bindValue(2, $pass);
        $consulta->execute();
        $user = $consulta->fetch();

        return (!empty($user)) ?
            new User($user['ID'], $user['NAME'],  $user['PASS'],  $user['ROLE']) : null;
    }
}
