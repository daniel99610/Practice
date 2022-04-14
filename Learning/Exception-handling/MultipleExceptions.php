<?php

function custom_exception_handler($exception){
    echo 'Caught Exception: ' . $exception->getMessage();
}


// when we called the method 'divide(1,0)'
// this was executed and passed to catch echo 'Caught Exception: ' . $exception->getMessage();
// the catch is able to get this message 'Divide by Zero Exception might happen' using $e->getMessage
// then we are adding some more custom exception, "Divide method has input param is less than zero." and then throwing it again
function divide($x, $y)  : int {

    try{
        if( $y <= 0 ){
            throw new Exception("Divide by Zero Exception might happen");
        }
    }

    $result = $x / $y;
    
}catch(Exception $e){ // the error message is coming from this caught exception
    throw new Exception("Divide method has input param is less than zero." . $e->getMessage() ); // the $e->getMessage is coming from the ("divide by zero exception might happen")
}

return $result;


// this will handle any php exception that is not caught with try catch
set_exception_handler('custom_exception_handler');
divide(1,0);

?>