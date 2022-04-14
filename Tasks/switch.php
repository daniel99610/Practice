<?php


// write a switch statement to print numbers 0 - 1000 and display the number 500 in red and 250 in blue

/*

for($value = 0; $value <= 1000; $value++){
    switch($value){
        case $value == 500;
            echo "<li style='color: red;'>$value</li>";
            break;
        case $value == 250;
            echo "<li style='color: blue;'>$value</li>";
            break;
        default; 
            echo "<li>$value</li>";
    }
}


*/

// simplify


for($value = 0; $value <= 1000; $value++){
    echo "<li style='color:";
    switch($value){
        case $value == 250;
            echo "blue;'";
        case $value == 500;
            echo "red;'";
        default;
            echo "black'";
    }

    echo ">$value</li>";
}



?>