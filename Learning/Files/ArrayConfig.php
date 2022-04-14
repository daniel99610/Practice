<?php

// read configuration file into an array

// this will print the 'settings' of test.ini into an array


/*
printed in an associative array (you have a key and you have a value)
all of the fields are put as a key

*/

$settings = parse_ini_file("test.ini");
print_r($settings);


// iterate
foreach($settings as $key => $val){
    echo $key . ' => ' . $val;
}


echo $settings['white'];
echo $settings['font1'];

?>