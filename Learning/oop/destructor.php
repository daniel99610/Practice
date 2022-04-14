<?php


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

    public function __destruct() {
        echo "I am destroyed".$this->color;
    }
    // when we run the below code, once it has finished (once the 2 echo have been executed) the destrcut function will print "I am destroyed"
}


$myCar = new Car ( 'color:green </br>', 'weight:2500');
$myCar2 = new Car( 'color:white </br>', 'weight:1800');
echo $myCar->getColor();
echo $myCar2->getColor();

// i am destroyed is printed twice because we have 2 objects and both of them have stopped (been destroyed)
// one of the uses of constructors is to maybe display a message once a program has run and finished

?>