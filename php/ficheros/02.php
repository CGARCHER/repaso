<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo subida, mezcla y ordenación de ficheros de nombre</h1>

    <form action="02_subir_files.php" method="post" enctype="multipart/form-data">
        <label for="file1"></label>
        <input type="file" name="file1" id="file1" value="Seleccionar archivo" required/>
        <br>
        <label for="file2"></label>
        <input type="file" name="file2" id="file2" value="Seleccionar archivo" required/>
        <br><br>
        <button>Enviar, subir y ordenador</button>
    </form>
</body>
</html>