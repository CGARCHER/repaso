<main class="main">
    <form action="<?= BASE_URL ?>/articulo/importar" method="post">
        <label class="form-label" for="import">Producto</label>
        <textarea name="import" id="import" class="textarea" maxlength="255" rows="5" cols="100" required>
        </textarea>
        <button class="btn btn-info">Importar</button>
    </form>
</main>