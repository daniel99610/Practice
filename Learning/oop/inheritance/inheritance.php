<?php

class cars {
    public $make;
    public $color;
    public function __construct($make, $color) {
        $this->make = $make;
        $this->color = $color;
    }

    public function intro() {
        echo "The car is an {$this->make} and the color is {$this->color}";
    }
}

class audi extends cars {
    public function message() {
        echo "I am a german car </br> ";
    }
}


$audi = new audi("audi", "black");
$audi->message();
$audi->intro();




?>