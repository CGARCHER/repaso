
<?php
require_once("view/airportHeader.php");
?>
<main>
    <form action="<?= BASE_URL?>/airport/add" method="post">
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" required>

        <label for="numRoad">NumRoad:</label>
        <input type="number" name="numRoad" id="numRoad">

        <label for="gateway">Gateway:</label>
        <input type="number" name="gateway" id="gateway">

        <button>Añadir</button>

    </form>
</main>

<?php
require_once("view/airportFooter.php");

?>