<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= BASE_URL ?>/user/validate" method="post">
     <label for="name">Nombre:</label>
     <input type="text" name="name" id="name"/>
     <br>
     <label for="name">Contraseña:</label>
     <input type="password" name="pass" id="pass"/>
     <br>
     <button type="submit">Acceder</button>
    </form>
</body>
</html>