<table border="1">
    <tr>
        <th>id</td>
        <th>name</td>
        <th>description</td>
        <th>stock</td>
        <th>price</td>
    </tr>

    <?php
    
        foreach ($articulos as $element) {
            echo "<tr>";
            echo "<td>".$element->getId()."</td>";
            echo "<td>".$element->getName()."</td>";
            echo "<td>".$element->getDescription()."</td>";
            echo "<td>".$element->getStock()."</td>";
            echo "<td>".$element->getPrice()."</td>";
            echo "</tr>";
        }
    
    
    ?>

</table>