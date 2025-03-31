<?php
require_once("view/airportHeader.php");

?>
<main>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Location</th>
            <th>NumRoad</th>
            <th>GateWay</th>
        </tr>
        
            <?php foreach ($aeropuerto as $valor) {
                echo "<tr>";
                echo "<td>" . $valor->getId(). "</td>";
                echo "<td>" . $valor->getLocation(). "</td>";
                echo "<td>" . $valor->getNumRoad(). "</td>";
                echo "<td>" . $valor->getGateway(). "</td>";
                echo "<td><a  href='". BASE_URL. "/airport/delete/". $valor->getId()."'>Eliminar</a></td>";
                echo "</tr>";
            }?>
        </tr>
    </table>
</main>

<?php
require_once("view/airportFooter.php");

?>

