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


$path = "TestFolder1";
$result = scandir($path);
var_dump($result);