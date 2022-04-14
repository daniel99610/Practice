<?php

// how to print a date

/*

d - Represent day of the monthy; two digits with leading zeroes (01 or 31)
D - Represent day of the week in text as an abbreviation Mon to Sun
m - Represent month in numbers with leading zeroes (01 0r 12)
M - Represent month in text, abbreviated (Jan to Dec)
y - Represent year in two digits (08 or 14)
Y - Represent year in four digits (2008 or 2014)

time stamp
h:i:s:a

h - hours
i - minutes
s - seconds
a - AM/PM


H - 24 hours clock

*/


echo "Current Date: " . date("d-m-y h:i:s:a");
echo "<br/>";
echo "Current Date: " . date("D-M-Y H:i:s:A");


// miliseconds

echo "Current Time in Miliseconds: " . time();


$time = time() + 1000;
echo "Current Date: " . date("d-m-y h:i:s:a", $time);

?>