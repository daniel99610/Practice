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
/*variable scope
the scope of variable name is outside of the function
when you redefine the same variable with a different value inside the function the variable will die after the function has been completed
the function doesnt really change the variable name because the scope of the $name inside the function retains inside the function itself. it has no scope outside of the function

*/
$name = 'Geralt';

function print_name() {
    $name = "PHP!";
    echo $name;
}

print_name();
echo $name;

// what happens when you try to print a message of a variable that is not defined inside the function but is defined outisde the function
// if you go inside any function, it doesnt understand the variable that is defined outside of the function 
$message = "Welcome to PHP!";
function print_message() {
    echo $message;
}
print_message();
?>
</body>
</html>