<?php
session_start();


function add()
{
    if (!isset($_SESSION['lista'])) {
        $_SESSION['lista'] = [];
    }
    $producto = $_REQUEST['producto'];
    $cantidad = $_REQUEST['cantidad'];
    $_SESSION['lista'][$producto] = $cantidad;
    print_r($_SESSION['lista']);
}

function destroy()
{
    session_destroy();
    echo "Juan ha entrado por la puerta (again)";
}


$option = $_REQUEST['option'];

if ($option == "add") {
    add();
} else {
    destroy();
}

?>
<a href="index.html">Volver</a>