<?php

echo date_create("now")->format("Y-m-d H:i:s");
echo "<br/>";
echo date_create("+1 day")->format("Y-m-d H:i:s");
echo "<br/>";
echo date_create("-1 day")->format("Y-m-d H:i:s");



// say we have a date entered somewhere in the program and we have this format below
$strTime = strtotime("2019-05-21 9:00:00");

// we can convert it into any format we want
echo date("d:m:y h:i:s", $strTime);



// here we are saying if current time is greater than or equal to the time we mentioned above $strTime
if( time() <= $strTime){
    echo "Time is ahead";
}else{
    echo "Time is not ahead";
}
?>