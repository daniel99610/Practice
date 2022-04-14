<?php



function myCustomFunction ($name, $age) { // the variables are pulled from here
    $results .= '<p>Name: ' . $name . '</p>'; // this variable has to be pulled from somewhere
    $results .= '<p>Age: ' . $age . '</p>'; // this variable has to be pulled from somewhere

    return $results;
}


$profile = myCustomFunction('John Morris', 29); 

echo $profile; // this calls the above function and pass these parameters into it ('john morris, 29)
// jonh morris will be set as the $name variable
// 29 is set as the age variable
// anywhere in the script we use the variables $name and $age they will be replaced with the variables we passed to them in the function
// if we were to replace the number 29 with the number 35 then 35 will print every time we echo out the $age variable 
?>