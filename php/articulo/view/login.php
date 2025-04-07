<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class="container mt-3">
    <h1>APP ARTICLE</h1>
    <form action="<?=BASE_URL?>/user/login" method="post">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name">

        <label class="form-label" for="pass">Pass</label>
        <input class="form-control" type="password" name="pass" id="pass">

        <input class="btn btn-primary mt-3" type="submit" value="Iniciar Sesion">
    </form>
</body>
</html>