<?php


class Person {

    // here we have some private properties and a public method
    // private means we can only access the data from inside the class
    
    private $first = "Daniel"; // this is set to private so it shouldnt be able to echo out
    private $last = "Nielsen";
    private $age = "28";

    // if we were to make a public method like the one down here and access the property from inside this method it now means we can access the properties from inside this method here
    // this method can access the properties.
    // so if we can access the method from inside the index page then we can access the properties inside the method
    public function owner() {
        $a = $this->first;
        return $a;

    }
}

class Pet {
    public function owner() {
        $a
    }
}




?>