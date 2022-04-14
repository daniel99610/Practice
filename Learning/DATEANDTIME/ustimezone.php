<?php


echo date_default_timezone_get();
echo date("m/d/y h:i:s a");
date_default_timezone_set("Australia/Melbourne");
echo "</br>";
echo date("m/d/y h:i:s a");
echo date_default_timezone_get();
?>