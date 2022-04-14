<?php

/*
function custom_exception_handler($exception){
    echo 'Caught Exception: ' . $exception->getMessage();
}

// we are saying to php when there is an error use this method 

set_exception_handler('custom_exception_handler');
throw new Exception("EAxception is raised!");

*/




function custom_exception_handler($exception){
    echo 'Caught Exception: ' . $exception->getMessage();
}

function divide($x, $y)  : int {
    if( $y <= 0 ){ // here we are saying if $y is = to or less than 0 then this will be an error
        throw new Exception("Divide by Zero Exception might happen");
        // if $y is = to or less than 0 then we are 'throwing' the exception 
    }

    $result = $x / $y;
    return $result;
}


set_exception_handler('custom_exception_handler');
divide(1,0);