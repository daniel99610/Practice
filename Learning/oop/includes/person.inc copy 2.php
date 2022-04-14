<?php


class Person {


    public $name = "Daniel"; 
    public $eyeColor = "Nielsen";
    public $age;

    // using a constructor. You have to let the program know you are using a constructor otherwise it is not going to be seen
    // whatever we write in this method below will be run at the beginning when we create the class
    // the reason we want a constructor is because now, right before we create an object, we can actually assign the values inside these properties we have up here
    // we need to pass these properties up here in the parameter otherwise it is not going to work
    public function __construct($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }



    // method
    public function setName($name){
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}


?>