<?php

// convert date into an array
$dateArr = getdate();
var_dump($dateArr);



// the whole date is converted to an array using this
echo "<ul>";

foreach($dateArr as $format => $val){
    echo "<li>";
    echo "$format => $val";
    echo "</li>";


}

echo "Weekday: " . $dateArr["weekday"];
echo "Weekday: " . getdate()["weekday"];
echo "Year: " . getdate()["year"];
echo "</li>";






?>