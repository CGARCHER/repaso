<?php
session_start();
require_once("config/config.php");
require_once("controller/userController.php");
require_once("controller/airportController.php");


if(isset($_REQUEST['controller']) && isset($_REQUEST['action'])){
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
}
else{
    $controller = "UserController";
    $action = "showLogin";
}

$userController = new $controller();
if($action == "deleteAirport" || $action == "showUpdateAirport"){
    $userController->$action($_REQUEST['id']);
}else{
    $userController->$action();
}

?>