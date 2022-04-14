<?php

require_once 'config.php';

require_once('lib/Template.php');



function __spl_autoload($class_name){
    require_once 'lib/'.$class_name. '.php';
}







