<?php

echo "<h4>Array Functions</h4>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

echo "<h4>Access Indexed Arrays</h4>";
$cars = array("Volvo", "BMW", "Toyota");
$cars[0] = "Ford";
var_dump($cars);
echo "<br>$cars[0]";

unset($cars);
echo "<h4>Index Number</h4>";
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);

echo "<br><br>";

$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);

echo "<h4>Associative Arrays</h4>";
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"]; echo "<br><br>";
$car["year"] = 2024;
var_dump($car); echo "<br><br>";

foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}

echo "<h4>Excecute a Function Item</h4>";
function myFunction() {
    echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction());

$myArr[2];

echo "<h4>Update Array Items in a Foreach Loop</h4>";
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
    $x = "Ford";
}
unset($x);
var_dump($cars);

echo "<h4>Add Array Item</h4>";
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
var_dump($fruits);

echo "<h4>Add Associative Arrays</h4>";
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
var_dump($cars);

echo "<h4>Add Multiple Array Items</h4>";
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);

echo "<h4>Add Multiple Items to Associative Arrays</h4>";
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
var_dump($cars);

echo "<h4>Remove Array Item</h4>";
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);

echo "<h4>Remove Multiple Array Items</h4>";
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
var_dump($cars);

echo "<h4>Remove Item From an Associative Array</h4>";
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);

echo "<h4>Using the array_diff Function</h4>";
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);

echo "<h4>Remove the Last Item</h4>";
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);

echo "<h4>Remove the First Item</h4>";
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);

echo "<h4>Sort Array in Ascending Order - sort()</h4>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
var_dump($cars);
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
var_dump($numbers);

echo "<h4>Sort Array in Descending Order - rsort()</h4>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
var_dump($cars);
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
var_dump($numbers);

echo "<h4>Sort Array (Ascending Order), According to Value - asort()</h4>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
var_dump($age);

echo "<h4>Sort Array (Ascending Order), According to Key - ksort()</h4>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
var_dump($age);

echo "<h4>Sort Array (Descending Order), According to Value - arsort()</h4>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
var_dump($age);

echo "<h4>Sort Array (Descending Order), According to Key - krsort()</h4>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
var_dump($age);

echo "<h4>Two-dimensional Arrays</h4>";
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

for ($row = 0; $row < 4; $row++) {
    echo "<p>Row number $row</p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

echo "<h4></h4>";
?>