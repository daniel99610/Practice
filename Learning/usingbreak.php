<?php

// break the infnite loop
// print 1 to 10 using infinite loop




// this will be infinite loop
// we want to break this infinite loop and only print 1-10
$value =1;
do{

    echo $value;

    if( $value >= 10){
        break; // this break does not break the if conditions. this is how you print it to 10.
    }
    $value++
}while(true);


// if you have 3 loops and you want to bneak out of the inner loop
// break multiple loop

$loop1 = 1;
$loop2 = 1;
$loop3 = 1;
for( ; $loop1 <= 10 ; $loop1++) { // first loop
    while( $loop2 <= 10 ){

        do{

            $loop3++;
        }while($loop3 <= 10);

        $loop2++;
    }
    // this is breaking the loop. here we are saying when $loop is = to 7 then break the loop. when the for loop reaches 7 then break the loop
    if( $loop1 == 7){ 
        break;
    }
    echo"Loop 1: $loop1 "
}

?>