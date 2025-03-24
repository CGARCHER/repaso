<?php
require_once("config/config.php");
require_once("controller/userController.php");

if(isset($_REQUEST['controller']) && isset($_REQUEST['action'])){
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
}
else{
    $controller = "UserController";
    $action = "showLogin";
}

$userController = new $controller();
$userController->$action();

?>