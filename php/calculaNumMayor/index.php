<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Seleccione Fichero:</label>
        <input type="file" name="file" id="file">
        <button>Subir</button>
    </form>
    
    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $file = $_FILES['file'];
        $contenido = file_get_contents($file['tmp_name']);
        $numeros = explode("\n", $contenido);
        echo max($numeros);
    }

    ?>
    
</body>
</html>