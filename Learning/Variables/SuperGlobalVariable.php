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

global $message;
$message = "Welcome to PHP";
echo $GLOBALS['message'] . "<br>";
// by default when you say global its already setting your variable in this super global variable


// example 2 predefined super global variables
echo "Filename: " . $_SERVER['PHP_SELF'];




// exaqmple 3 this one will try to use a super global variable to access a global variable inside the method
global $name;
$name = "John, Smith";

function print_name(){
    // previously if we print echo $name it doesnt really have access to global variable you have to define it is a global and then you have to use it

    // theres a good way without defining the same variable as global you can use the super global variable

    // here you are able to access a global variable with the super global variables

    echo $GLOBALS['name'];
}

print_name();

?>
    
</body>
</html>