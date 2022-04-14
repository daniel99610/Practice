<?php

// Functions /////////////////////////
welcome_message();
function welcome_message(){
    echo 'Welcome to PHP Functions!';
}

/////////////////////////////////////

function add() {  
    $firstvalue = 10;
    $secondvalue = 20;
    $total = $firstvalue + $secondvalue;
    echo $total;
}

add();
// Functions /////////////////////////






// global variable /////////////////////////////
global $name;

    $name = "Gerlat!";
    
    function print_name(){
        $name = "PHP!";
        echo $name;
    }

    print_name();
    echo $name;

    //////////////////////////////////////

    global $message1;

    $message1 = "Welcome to PHP1";
    
    function print_message1(){
        global $message1;
        echo $message1;
    }

    print_message1();
    echo $message1;

// global variable /////////////////////////////




// local variable /////////////////////////////

$name = 'Geralt';

function print_name() {
    $name = "PHP!";
    echo $name;
}

print_name();
echo $name;

//////////////////////////////////////



// local variable /////////////////////////////

?>