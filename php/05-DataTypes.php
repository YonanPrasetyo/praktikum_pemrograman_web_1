<?php

// PHP String
$x = "Hello world!";

var_dump($x);
echo "<hr>";

// PHP Integer
$x = 5985;
var_dump($x);
echo "<hr>";

// PHP Float
$x = 10.365;
var_dump($x);
echo "<hr>";

// PHP Boolean
$x = true;
var_dump($x);
echo "<hr>";

// PHP Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<hr>";

// PHP Object
class car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is a " . $this->color ." ". $this->model ."!";
    }
    }
$myCar = new Car("red" , "Volvo");
var_dump($myCar);
echo"<hr>";

// PHP NULL Value
$x = "Hello world!";
$x = null;
var_dump($x);
echo"<hr>";

// Change Data Type
$x = 5;
$x = (string) $x;
var_dump($x);
?>