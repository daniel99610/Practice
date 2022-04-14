<?php

$maths = 70;
$science = 30;
$english = 80;
$totalMarks = $maths + $science + $english;
// echo $totalMarks;



// example 3
// Find the difference between marks achieved and total marks
$totalSubjects = 300;
$totalDifference = $totalSubjects - $totalMarks;
// echo $totalDifference;



// example 4
// calculate the area using the length and breath
$length = 10;
$breath = 20;
$area = $length * $breath;
// echo $area;

// example 4
// calculate the percentage of overall scored marks

$percentage = ($totalMarks) / $totalSubjects * 100; // this is basically the equation to calculate percentage
// echo "$percentage%"; // to get this percentage sign to echo out with the number you have to wrap the echo output in a string


// example 5 
// You use the modulus operator to find the remainder of the operation


$a = 106 % 5; // this is basically when you divide 101 by 5, what is the remainder? It is 1
echo $a

?>