<?php

/*


$value =1;
while($value <= 100){
    echo $value++ . "<br/>";
}

*/

/*

$value =0;
while($value <= 100){
    echo $value+=2;
}

*/



/*

$tl = "green";

if( $tl == "red"){
    echo "stop";
}else if ( $tl == "green"){
    echo "Go";  
} else {
    echo "get ready";
}

*/


/*

$tl = "red";



switch($tl){
    case "red":
        echo 'stop';
        break;
    case "green":
        echo 'go';
        break;
    default:
       echo 'get ready';
}

*/
/*
echo "<ul>";
for ($value = 0; $value <= 1000; $value++) {
    
    if ($value == 500) {
        echo "<li style='color: red';>$value</li>";
    } else {
        echo "<li>$value</li>";
    }
} 
echo "</ul>";

*/


$value = 0;

do {
    if ($value <= 1000)
    echo "<li>.$value.</li>";
    $value++;  
}

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


for ($value = 0; $value <= 1000; $value++){
    echo "<li class = 'i$value'>$value</li>";

    
} 


echo "</ul>";
*/

?>


