<?php

function findBiggest($num1,$num2,$num3){
    $mayor = $num1;
    if($num2 > $mayor){
        $mayor = $num2;
    }
    if($num3 > $mayor){
        $mayor = $num3;
    }
    return "El número mayor es ". $mayor;
}

$num1 = $_REQUEST['number1'];
$num2 = $_REQUEST['number2'];
$num3 = $_REQUEST['number3'];

echo findBiggest($num1,$num2,$num3);

#echo "El número mayor es ". max($num1, $num2, $num3);

?>