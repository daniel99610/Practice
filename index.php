<?php
   include 'practice.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    running this would print nothing in the browser because we havent set a name
     $practice1 = new practice();
     echo $practice1->name;
     */

    $practice1 = new practice();
    $practice1->setName("daniel");
    echo $practice1->name;
    ?>
</body>
</html>