<?php


// set a custom handler to a method
function custom_exception_handler($exception){
    echo 'Caught Exception: ' . $exception->getMessage();
}

// then we threw an exception and then that exception is caught
set_exception_handler('custom_exception_handler');


try{
    throw new Exception("Exception is raised!");
}finally{
    echo "This line is executed before exception"
}

// finally blocks are executed before the exception has been raised
// even if there is an error or not, this block of code will get executed no matter what
// this is the safest block to close all of your opne connections
/* 
say if you open a connection with a database in your program, and maybe that connection is still open
and something happened in your program.
when you want to exit or close the database connection 
all of these things are typically done in the finally block
*/


// finally block is executed before exception is raised
// throw new exception("Exception is raised!");   (this is how you write an exception)
?>