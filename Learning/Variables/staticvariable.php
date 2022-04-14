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
    // 
    function counter() {
        $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }
    // when you print this out
    // it will print out 5 1s this is because the $count is a local variable to this function
    // whenever you want to recall the function this variable will be recreated and assigned once 
    // what if you want to assign it once and you want the function to remember that variable and you want to print 1 to 5
    counter();
    counter();
    counter();
    counter();
    counter();


    // static variable will not die off when the function finishes
    echo "<h1>Static variables</h1>";
    function counter_static() {
        static $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }

    counter_sticker();
    counter_sticker();
    counter_sticker();
    counter_sticker();
    counter_sticker();

    ?>
</body>
</html>