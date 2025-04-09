<main class="main">
    <form action="<?= BASE_URL ?>/articulo/importar" method="post">
        <label class="form-label" for="import">Productos a insertar</label><br>
        <textarea name="import" id="import" class="textarea" maxlength="255" rows="5" cols="100" required>
        </textarea><br>
        <button class="btn btn-info">Importar</button>
    </form>
</main>