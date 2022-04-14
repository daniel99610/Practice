<?php

// how to read a file


// open a file
// read file content
// close the file


//File Modes
//r - read mode
//w - write
//a - append


//method 1
// filName
$fileName = "content.txt";



// STEP 1 
// Here we used file_exists to check if the file exists or not
// we also verified that it is a file not a folder


//good practice - check if files exists
if( file_exists($fileNem) ){
    if( !is_file($fileName) ){
        die("File does not exist");
    }
}








//Read the file
// this will basically read and display the entire content of the file specified


// STEP 2
// Here we passed the file name and then passed the data into a string variable and then printed that variable
$content = file_get_contents($fileName);


echo $content;




//Method 2
//open a file

// STEP 2
// We opened the file

$fileHandler = fopen($fileName, "r");
$fileSize = filesize( $fileName );



// STEP 2
// we checked the size
// here we are 
// read the file content
$content = fread($fileHandler, $fileSize);
echo $content;





// STEP 2
// close the file
fclose($fileHandler); // here we should not pass the file name we should pass the file handler




// STEP 3
// here we checked if the file exists, if not then execute the program
// write operations - method 1

$fileHandler = fopen( $fileName, "w") or die("Unable to write the file");


// this will write content in the file we created below
fwrite($fileHandler, "This is a modified content");
fclose($fileHandler);


// method 2 this will create a new file
$fileName1 = "NewFile.txt";
file_put_contents($fileName1, "This is a modified Content!");





?>