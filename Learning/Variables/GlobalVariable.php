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
    //Example 1
    // to define a global variable you have to add 'global' before a variable
    // a global variable can be accessed from anywhere
    // you have to first define a global variable then assign it
    global $name;

    $name = "Gerlat!";
    
    function print_name(){
        $name = "PHP!";
        echo $name;
    }

    print_name();
    echo $name;


    // Example2
    // when you define a global variable you dont assign a value straight away
    // you define it first and then you assign a value
    // we have a global variable below and we are trying to print it
    // previously we created a global variable and then another variable inside the function
    // this time we are just trying to access the global variable we are not trying to define it we are just trying to print it
    // this will print out "welcome to PHP twice", the first time from the method and the second time is the echo at the bottom
    // even though you have defined a global variable the function cannot access that variable
    global $message;

    $message ="Welcome to PHP!";

    function print_message(){
        echo $message;
    }

    print_message();
    echo $message;


    //Example3
    // now we can access the $message from the function because we defined as a global and we are saying we want to use the global variable so give me the value
    // when you have a global variable and you want to access the global variable from the function you have to redefine the same variable with the keyword global and then you can start using the variable
    global $message1;

    $message1 = "Welcome to PHP1";
    
    function print_message1(){
        global $message1;
        echo $message1;
    }

    print_message1();
    echo $message1;

    ?>
</body>
</html>