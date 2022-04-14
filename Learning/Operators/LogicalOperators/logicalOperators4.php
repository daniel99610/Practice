<?php

/*

AND - both conditions sould be true
OR - any one of the conditions can be true
&& - both conditions should be true (same as AND)
|| - any one of the conditions can be true (same as OR)
! - if not not condition?

*/


// example 1
// Greet Hello, Name if the user is logged in and has permission

$permission = true;
$loggedin = true;
$user = "John, Smith";
echo ($permission and $loggedin) ? "Hello, $user" : "Hello, Guest";

// we are using the and operator to check whether both of the conditions are true
// if both of the conditions are true then "hello (user name) is executed 
// if any of the condition is false then hello guest is executed


// example 2
// check if student passed any one exam

$student = "John";
$mathspassed = true;
$sciencepassed = true;

// either this or that is true
echo ( $mathspassed or $sciencepassed ) ? "$student has passed" : "$student has not passed";


// example 3 
// Find the difference between and && 
// operator precedence, &7 has more presedence over = so the first line will be executed
// in the second line the = has more presedence over AND
$result1 = true && false;
$result2 = true and false;

echo ($result1) ? "true" : "false";
echo ($result2) ? "true" : "false";


// example4
// find the difference between or ||
// operator presedence
$result1 = true || false;
$result2 = true or false; // = has more presedence over or

echo (true || false) ? "true" : "false";
echo (true or false) ? "true" : "false";
?>