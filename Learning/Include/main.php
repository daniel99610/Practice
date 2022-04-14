<!DOCTYPE html>
<html lang="en">
<head>
    <title>Include Functions</title>
</head>

<body>


<?php

include "header.php";

?>


<body>

<?php
include "menu.php";
require "submenu.php"; // this file doesnt exist
// require means if this file is not available do not execute the rest of the code
// the require function will make sure this file is available on the server
// if this file is not available on the server it will not execute the rest of the code



// include "submenu.php"; we will see an error because this file is not created. it will keep on executing
// some files might be required to process another file 
// if the file is accidentally deleted in the server and someone is trying to execute this page
?>


<h1>Exercise on How to Include Files</h1>

<?php
include "footer.html";

?>

