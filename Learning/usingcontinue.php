<?php


// continue will skip the next line and go to the next loop
// if you have 10 lines in a loop and you want to execute the first line and then again execute the next iteration of the loop




//1) Print even numbers using while infinite loop and break after 10 numbers

$value = 1;
while(true){
    $result = $value %2;


    // this statement prints just even numbers
    if( $result == 1 ){
        $value++;
        continue; // continue skips the lines below and goes back to the above while
    }


    if($value > 10){
        break;
    }

    echo 'Even numbers:' . $value;
    $value++;
}
?>