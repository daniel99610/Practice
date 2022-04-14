<?php

// read csv file
// Read entire content
$fileName = "students.csv";
$content = file_get_contents($fileName);
print_r($content);



// Read line by line
$csvFile = file($fileName); // on this line we are reading the file
foreach( $csvFile as $line){
    echo $line; // in this line of code we are saying to print per line
}



// there are 2 things happening here
$csvFile = file($fileName); // 1 we are reading a file
var_dump($csvFile);
foreach( $csvFile as $line){
    $data[] = str_getcsv($line); // then we are converting per line into a csv
    print_r($data);
}



?>