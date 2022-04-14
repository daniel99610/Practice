


<?php


/*
echo "<ul>";

for($value = 0; $value <= 1000; $value++){
    if($value == 500){
        echo "<li style='color: red';>$value</li>";
    } else {
        echo "<li>$value</li>";
    }
}


echo "</ul>";
*/



/*
echo "<ul>";
for ($value = 0; $value <= 1000; $value+=5) {
    echo "<li";
    if ($value == 500) {
        echo " style='color: red';";
    } elseif ($value == 250){
        echo " style='color: blue';";
    }
    echo "> $value </li>";
} 
echo "</ul>";

*/

/*

echo "<ul>";

for($value = 0; $value <= 1000; $value++){
    echo "<li";
    if ($value == 500){
        echo " style='color: red';";
    } elseif ($value == 250){
        echo " style='color: blue';";
    }
    echo ">$value</li>";
}


echo "</ul>";






$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}



echo "<li style='color: red';>$value</li>";



echo "<ul>";


for($value = 0; $value <= 1000; $value++){
    switch($value){
        case $value == 250;
            echo "<li style='color: blue';>$value</li>";
            break;
        case $value == 500;
            echo "<li style='color: red';>$value</li>";
            break;
        default;
            echo "<li>$value</li>";

    }
}


echo "</ul>";






echo "<ul>";

for($value = 0; $value <= 1000; $value++){
    echo "<li style='color:";
    switch($value){
        case $value == 250;
                echo "blue;'";
                break;
        case $value == 500;
                echo "red;'";
                break;
        default;
               echo "black;'";
    }
    echo "> $value </li>";
}


echo "</ul>";




// no code is executed until a case statement is found with a value that matches the value of the switch switch expression

echo "<ul>";
for($value = 0; $value <= 1000; $value++){
    echo "<li style='color:";
    switch($value){
        case $value == 250;
            echo "blue;'";
            break;
        case $value == 500;
            echo "red;'";
            break;
        default;
               echo "black;'";
    }
    echo "> $value </li>";
}


echo "</ul>";



for($value = 0; $value <= 1000; $value++){
    switch($value){
        case $value == 250;
            echo "<li style='color: blue';>$value</li>";
            break;
        case $value == 500;
            echo "<li style='color: red';>$value</li>";
            break;
        default;
            echo "<li>$value</li>";

    }
}


$value = 0;
while($value <= 1000){
    echo $value++ . "<br/>";
}




echo "<ul>";

for($value = 0; $value <= 1000; $value++){
    switch($value){
        case $value == 250;
            echo "<li style='color: blue';>$value</li>";
            break;
        case $value == 500;
            echo "<li style='color: red';>$value</li>";
            break;
        default; echo "<li>$value</li>";
        
    }
}


echo "</ul>";








echo "<ul>";

for($value = 0; $value <= 1000; $value++){
    if($value == 500){
        echo "<li style='color: red';>$value</li>";
    } else {
        echo "<li> $value </li>";
    }
}

echo "</ul>";






echo "<ul>";

for($value = 0; $value <= 1000; $value++){
    echo "<li style='color:";
    switch($value){
        case $value == 250;
            echo "blue;'";
        case $value == 500;
            echo "red;'";
        default; echo "black'";
    }
    echo ">$value</li>";
}


echo "</ul>";

*/

function getSum($num1, $num2){
    $sum = $num1 + $num2; 
    echo "Sum of the two numbers $num1 and $num2 is : $sum";
}


getSum(452, 237);



?>