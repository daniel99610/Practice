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
    // empty variable 
    $name;
    echo $name;

    // ternary operator
    echo isset($name) ? "Variable Set" : "Variable is not set"; // if this condition is true then the first one "variable set" will be printed if the condition is false then the second one will be printed "Variable is not set" 

    $name = " John, Smith";
    echo isset($name) ? "Variable Set" : "Variable is not set";

    // that is the use of this method it check whether that variable is set or not



    // here we want to verify whether the name variable is set or not

    $firstname; // if there is a value assigned to this variable then "variable set" will print if there is no value then "variable is not set" will print
    $name = $firstname;
    echo isset($name) ? "Variable Set" : "Variable is not set";
    ?>
</body>
</html>