<?php

/* 
Write a function to print the numbers from 0 to whatever number a user specifies and whatevr 50% is 
of the specified number, display background as red, whatever 25% is of the specified number, display the background colour as gree
*/
function something($start, $num1){


    $value1 = $num1 / 2;
    $value2 = $num1 / 4;
    settype($value1, "integer");
    settype($value2, "integer");

    number_format($value1);


    var_dump($value1);

    for ($value = $start; $value <= $num1; $value++){
        if($value == $value1){
            
            echo "<li style='background: red';>$value</li>";
        } elseif ($value == $value2){
            echo "<li style='background: blue';>$value</li>";
        } else {
            echo "<li>$value</li>";
        }
    }

}




echo something(100, 301); 





?>