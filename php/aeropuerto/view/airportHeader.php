<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>· Iberia SL ·</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?= BASE_URL ?>/airport/list">Lista de Aeropuertos</a></li>
                <li><a href="<?= BASE_URL ?>/airport/showAdd">Insertar</a></li>
                <li><a href="<?= BASE_URL ?>/airport/showSearch">Busca el aeropuerto por localización</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <?php if (isset($_SESSION['message']) && !empty($_SESSION['message'])){ ?>
            <p class="alert alert-primary" role="alert"><?php echo $_SESSION['message'] ?><p>
    <?php  $_SESSION['message'] = ''; }?>
