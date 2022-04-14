<?php

/*
Raise an exception if the value is not integer
Checking an error and raise it
Create a function and check if the value of the input variable is an integer or not
If it is not integer then you raise an exception and then you catch that exception
*/

function custom_exception_handler($exception){
    echo 'Caught Exception: ' . $exception->getMessage();
}

function printEvenNumbers(int $start, int $end){
    if($start <= 0 || $end <= 0 || $start == $end){ // here we are saying if any of these things happen then we throw an exception
        throw new Exception("Incorrect Input Parameters");
    }

    for(;$start<=$end;$start++){
    if($start%2==0)
        echo "Even Number: $start";
    }
}


set_exception_handler('custom_exception_handler');
printEvenNumbers(1,1);


?>