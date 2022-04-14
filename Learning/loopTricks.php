


<?php

/*
<select>
for($x=1;$x<10;$x++){
    echo "$x <br />";
}


// this is to print years
for($x=2005;$x>=1950;$x--){
    echo "$x <br/>";
}

*/


// this is to print years in a drop down box
/*

for($x=2005;$x>=1950;$x--){
    echo "<option>$x </option>";
}
*/



// this is to have days of the month appear in a drop down


/*
for($x=1;$x>=3;$x++){
    echo "<option>$x </option>";
}
</select> // if you wrap the contents in a select tag then it becomes a drop down menu
*/

/*
// this is an array that prints the month names
$months = array("","January", "February", "March", "April", "May", // we add a dummy element in the array so that january doesnt appear as 0 but the dummy element will
"June", "July", "August", "September", "October", "November", "December");



for($x=0;$x<=11;$x++){
    echo "$months[$x] <br />";
}


?>


<select>

<?php
// if we print this january will appear as 0 when you inspect the page unless we set a dummy element in the array above
for($x=1;$x<=12;$x++){
    echo "<option name='$x'>
    $months[$x]
    </option>";
    
}




</select>
*/ 
?>

<table border="1">

<?php

// nested for loop


// this will create a multiplication table
for ($x=1;$x<=10;$x++){
    echo "<tr>";
    for($y=1;$y<=10;$y++){
        echo "<td>". $x*$y ."</td>";
    }
    echo "</tr>";
}
?>
</table>


