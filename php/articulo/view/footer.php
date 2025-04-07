<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Usuario conectado:<?php echo $_SESSION["name"] ?></p>
    <a href="<?=BASE_URL?>/user/destroy">Cerrar Sesion</a>
</body>
</html>