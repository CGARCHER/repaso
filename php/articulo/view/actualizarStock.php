<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=BASE_URL?>/articulo/update" method="post">
        <label class="form-label" for="id">Producto</label>
        <select class="form-control" name="id" id="id">
            
            <?php foreach ($articulos as $elemento) {
                echo "<option value='".$elemento->getId() ."'>".$elemento->getName()."</option>";
            } ?>
        </select>
        <label class="form-label" for="">Stock</label>
        <input class="form-control" type="number" name="stock" id="stock">

        <input class="btn btn-success mt-3" type="submit" value="Actualizar Stock">
    </form>
    
</body>
</html>