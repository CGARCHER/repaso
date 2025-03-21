<?php

function conex()
{
    return new PDO("mysql:host=localhost;dbname=product", "root", "");
}

function getAllProduct(){
    $sql = "SELECT id, nombre, cantidad FROM product";
    $consulta = conex()->prepare($sql);
    $consulta->execute();
    $productos = [];

    while($prod = $consulta->fetch(PDO::FETCH_ASSOC)){
        $productos[$prod['nombre']] = $prod['cantidad'];
        
    }

    return $productos;
}

function lista() {
    $req = getAllProduct();
    if (count($req) > 0) {
        foreach ($req as $key => $value) {
            echo "· Producto: " . $key . " - " . "Cantidad: " . $value . "<br>";
        }    
    } else {
        echo "No hay productos para presentarle, disculpe las molestias.";
    }
    
}

function saveProduct($nombre, $cantidad){
    $sql= "INSERT INTO product(nombre, cantidad) VALUES(?,?)";
    $consulta = conex()->prepare($sql);
    $consulta->bindValue(1,$nombre);
    $consulta->bindValue(2,$cantidad);
    return $consulta->execute();
}

function add()
{
    $producto = $_REQUEST['producto'];
    $cantidad = $_REQUEST['cantidad'];
    saveProduct($producto, $cantidad);
    lista();
}

function destroy()
{
    //Delete sin where
    $sql= "DELETE FROM product";
    $consulta = conex()->prepare($sql);
     
    if($consulta->execute() == 1) {
        echo "Lista eliminada con éxito";
    } 
}


$option = $_REQUEST['option'];

if ($option == "add") {
    add();
} else if ($option == "lista") {
    lista();
}else if ($option == "destroyer") {
    destroy();
}
else{
    echo "Opción invalida";
}

?>
<br>
<a href="index.html">Volver</a>
