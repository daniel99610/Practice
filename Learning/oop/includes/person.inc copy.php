<?php


class Person {

    // using protected instead of private now
    // by using this we are basically saying this property can only be accessed from within the same class just like private, however if any classes inherits any sort of properties and methods from this class here we can also use them inside that other class
    protected $first = "Daniel"; 
    protected $last = "Nielsen";
    protected $age = "28";
}


// the pet method is still trying to access a property from within the same class
// we dont have a property inside this class called first
// we can inherit properties and methods from one class to another class

// if we use extends, this means that all of the properties and methods within person, are now getting inherited into the pet class
// we can now access these properties in the person class if we were to use the protected keyword?

/*

If you have protected data you can only access the data from within the same class or any class that extends to it

the class below has access to all the properties and methods within it own class
and the class above.




*/
class Pet extends Person {
    public function owner() {
        $a = $this->first;
        return $a;

    }
}




?>