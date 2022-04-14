<?php

/* 
++ = Incremental by 1
-- = Decremental by 1

*/

//Use ++ Increment
$counter = 10;
$counter += 1;
// echo $counter;

//Post Increment operator
echo $counter++; // this prints 11 
echo $counter; // this prints 12 because the ++ is after the increment has been done the next time it adds another 1


//Pre Increment operator
// before any operations happens, the pre increment will happen
echo ++$counter;
echo $counter;




//Use -- Decrement
$counter = 10;
$counter -= 1;
echo $counter 

echo $counter--;
echo $counter;

echo --$counter;
echo $counter;


?>