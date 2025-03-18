<?php

function generateTable($num){
    for($i=0; $i <= 10; $i++){
        echo $num. " x ".$i. " = ".$num*$i ."<br>";
    }
}

$num = $_REQUEST['num'];
generateTable($num);

?>