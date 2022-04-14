<?php


/*
1) List all Files in a Directory
2) Check for specific files in a directory
3) check if the name is a directory
4) create directory 
5) copy files between directories

*/

// list all the files in a directory 
// scandir

// scandir is a function that lets you scan all of the files in a directory


$path = "TestFolder1";
$result = scandir($path);
var_dump($result);
foreach($result as $dir){
    if($dir != "." && $dir != ".."){
        echo $dir;
    }
}

// running this code will return the following output

/*

array(4) {
    [0] =>
    string(1) "."
    string(2) ".."
    [2] => 
    string(9) "Dummy.txt"                  // this is the file we created in the seperate test folder
    [3] =>     
    string(19) "FileDirectories.php"       // this is the file we created in the seperate test folder
}


*?