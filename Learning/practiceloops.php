<?php



/*
$value =1;
while($value <= 100){
    echo $value++;
}
*/




$value =0;
while($value <= 100){
    echo $value+=2;
}

//


$tl = "green";
if( $tl == "red"){
    echo "stop";
}else if ( $tl == "green"){
    echo "Go";  
} else {
    echo "get ready";
}






//

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




//

echo "<ul>";
for ($value = 0; $value <= 1000; $value++) {
    
    if ($value == 500) {
        echo "<li style='color: red';>$value</li>";
    } else {
        echo "<li>$value</li>";
    }
} 
echo "</ul>";




$value = 0;

do {
    if ($value <= 1000)
    echo "<li>.$value.</li>";
    $value++;  
}

//



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





//


echo "<ul>";
for ($value = 0; $value <= 1000; $value++){
    echo "<li";
    if ($value == 500){
        echo " style='color: red';";
    } elseif ($value == 250){
        echo " style='color: blue';";
    }
    echo "> $value </li>";

}
echo "</ul>"





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "<ul>";


for ($value = 0; $value <= 1000; $value++){
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
    
    echo "> $value </li>
    ";
} 


echo "</ul>";

?>
    
</body>
</html>


