<?php

// check if file exists

$fileName = "MyFolder";


// check file exists
if( file_exists($fileName) ){
    echo "this file exists ";


    // check if it is a directory

    if( is_dir($fileName) ){
        die("It is a Directory not file");
    }

    // this is to copy a file
    // all the content in 1 file will be copied into the other file
    copy($fileName, "CopyFile.txt");
    copy("CopyFile.txt", "CopyFile1.txt");

    // rename the files
    rename("CopyFile1.txt", "RenamedFile.txt");

    // delete the file
    unlink("RenamedFileDeleted.txt");
}else{
    echo "File / Directory does not exist";
    die("No Such Files"); // this is used to exit the program
}


/*

the function file_exists is used to check if a file exists
this is in an if statement basically saying if the file specified in the $fileName variable then echo "this file exists"
we are using the else statement to say if this file does not exist then echo "File / Directory does not exist"


*/


?>