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




?>