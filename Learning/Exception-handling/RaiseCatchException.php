<?php


function divide($x, $y)  : int {
    if( $y <= 0 ){ // here we are saying if $y is = to or less than 0 then this will be an error
        throw new Exception("Divide by Zero Exception might happen");
        // if $y is = to or less than 0 then we are 'throwing' the exception 
    }

    $result = $x / $y;
    return $result;
}
// whatever we write inside of this, it will try to monitor for errors
try{

    $result = divide(1, 0);


// when there is an error in this try block, php will automatically jump to the catch block and start executing the code in the catch block
}catch(Exception $e){ // you have to write the name of the exception and create a variable for it
    echo 'Caught Exception: ' . $e->getMessage();
}



?>