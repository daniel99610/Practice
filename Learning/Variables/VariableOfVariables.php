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
    // lets say you have 2 variables 1 is male that is the name John smith and the other is a gender saying it is a male
    
    
    $male = "John, Smith"; // male is a variable 
    $gender = "male"; // gender is holding a variable name. dont get confused with the text 'male', it is still a text but it is referring to a variable name
    // $gender is holding a variable name, not text

    // if you want to print male we will use variable of variables

    echo $gender;
    echo $$gender; // if we want to access the male value, because male is a variable and gender is holding a male variable
    // if we want to print male variable value we use 2 dollar signs
    // $($gender) ==> $(male)

    // in the output, the male is coming from $gender
    // in the output, the john smith is a variable of a variable

    $student = "John, Smith";
    $male = "student";
    $gender = "male";

    // how are we going to print john smith?
    // do the variable of variables 
    // the first $ will print male the second $ will print student
    // if we do a third variable that is basically a student variable and then john smith will be printed

    echo "<br>";
    echo $gender; // this first gender prints "male"
    echo $$gender; // this second gender is the male value that is student
    echo $$$gender; // the third gender is basically john smith

    ?>
</body>
</html>