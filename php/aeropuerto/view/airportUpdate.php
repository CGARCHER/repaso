<main>

    <form action="<?= BASE_URL?>/airport/update" method="post">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id" required readonly value="<?= $aeropuerto->getId() ?>">
        <br>
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" required  readonly value="<?= $aeropuerto->getLocation() ?>">
        <br>
        <label for="numRoad">NumRoad:</label>
        <input type="number" name="numRoad" id="numRoad" value="<?= $aeropuerto->getNumRoad() ?>">
        <br>
        <label for="gateway">Gateway:</label>
        <input type="number" name="gateway" id="gateway" value="<?= $aeropuerto->getGateway() ?>">
        <br>
        <button>Guardar</button>
    </form>
</main>