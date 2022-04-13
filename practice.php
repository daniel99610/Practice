<?php
/*
class practice {

    public $name;
    public $age;
    public $height;



    /* if we try and use this code below it would return an error 

    public function setName() {
        $this->name = $name;
    }

 

    // we need to pass the variable in the function
    public function setName($name) {
        $this->name = $name;
    }




}
*/


/*
class car {
    public $make;
    public $color;



    public function __construct($make, $color) {
        $this->make=$make;
        $this->color=$color;
    }

    public function getColor() {
        return $this->color;
    }

}


$myCar = new car ('make:bmw', 'color:red');
echo $myCar->getColor();

*/


class Car {
    private $color = 'red';
    private $weight = 2000;


    // $this variable is used to specify that we are targetting the property in THIS class.
    public function __construct($color, $weight){
        $this->color = $color;
        $this->weight = $weight;
    }

    public function getColor() {
        return $this->color;
    }


    public function getWeight() {
        return $this->weight;
    }

    public function __destruct() {
        echo "I am destroyed".$this->color;
    }
    // when we run the below code, once it has finished (once the 2 echo have been executed) the destrcut function will print "I am destroyed"
}


$myCar = new Car ( 'color:green ', 'weight:2500');
$myCar2 = new Car( '</br> color:white </br>', 'weight:1800');
echo $myCar->getColor();
echo $myCar->getWeight();
echo $myCar2->getColor();

?>