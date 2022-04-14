<?php

// write a loop that prints out the numbers 0 - 1000, in a list format. the number 500 should be printed in red. the number 250 should be printed in blue

/*
for ($value = 1; $value <=1000; $value++){
    if($value == 500){
        echo "<li style='background: red';>$value</li>";
    } elseif ($value == 250){
        echo "<li style='background: blue';>$value</li>";
    } else {
        echo "<li>$value</li>";
    }
}

*/

// simplify

echo "<ul>";

for ($value = 0; $value <= 1000; $value++){
    echo "<li";
    if($value == 500){
        echo " style='color: red;'";
    } elseif($value == 250){
        echo " style='color: blue;'";
    } else {
        
    }
    
    echo ">$value</li>";
}

echo "</ul>";




?>