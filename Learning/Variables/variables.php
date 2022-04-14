<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Define Strings</h1>
<?php
// you can use variables inside of strings ("")
$name = "John, Smith";
$message = "This is a string message";
echo $name . ": " . $message;
echo "$name: $message";
?>


<h1>Define Integers</h1>
<?php

$version = 7.0;
echo "PHP VERSION is $version";

?>

<h1>Combine String and Integer</h1>
<?php
// using the <br> will start the string on a new line
echo "$name: $message<br>";
echo "name: $name<br>";
$language = "PHP";
echo $language . " version is " . "$version";
?>



<?php 
// this is adding 2 integers
$firstvalue = 10;
$secondvalue = 20;
$total = $firstvalue + $secondvalue;

echo "Total: " . $total; 

?>

    
</body>
</html>