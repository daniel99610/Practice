<?php

function myCalculator($num01, $oper, $num02) {
    $sum;
    switch ($oper) {                             // here we are basically saying, depending on the operator variable we want to do something particular
        case "add": 
            $sum = $num01 + $num02;
            break;
        case "sub":
            $sum = $num01 - $num02;
            break;
        case "multiply":
            $sum = $num01 * $num02;
            break;
        case "divide":
            $sum = $num01 / $num02;
            break;
        default:
            $sum = "There was an error!";
            break;
    }
    return $sum;
}


$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];


echo "value: " . myCalculator($num01, $oper, $num02);

?>