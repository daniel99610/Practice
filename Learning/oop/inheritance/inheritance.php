<?php

class cars {
    public $make;
    public $color;
    public function __construct($make, $color) {
        $this->make = $make;
        $this->color = $color;
    }

    public function intro() {
        echo "The car is a {$this->make} and the color is {$this->color}";
    }
}

class model extends cars {
    public function message() {
        echo "I am a car ";
    }
}


$audi = new model("audi", "black</br>");
$audi->message();
$audi->intro();

$toyota = new model("toyota", "blue");
$toyota->message();
$toyota->intro();



?>