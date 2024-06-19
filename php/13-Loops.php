<?php
echo "<h1>PHP while Loop<h1>";

echo "<h4>The PHP while Loop</h4>";
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}

echo "<h4>The break Statement</h4>";
$i = 1;
while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
}

echo "<h4>The continue Statement</h4>";
$i = 0;
while ($i < 6) {
    $i++;
    if ($i == 3) continue;
    echo $i;
}

echo "<h4>Alternative Syntax</h4>";
$i = 1;
while ($i < 6):
    echo $i;
    $i++;
endwhile;


echo "<h1>PHP do while Loop</h1>";

echo "<h4>The PHP do...while Loop</h4>";
$i = 8;

do {
    echo $i;
    $i++;
} while ($i < 6);

echo "<h4>The break Statement</h4>";
$i = 1;

do {
    if ($i == 3) break;
    echo $i;
    $i++;
} while ($i < 6);

echo "<h4>The continue Statement</h4>";
$i = 0;

do {
    $i++;
    if ($i == 3) continue;
    echo $i;
} while ($i < 6);

echo "<h1>PHP for Loop</h1>";

echo "<h4>The PHP for Loop</h4>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo "<h4>The break Statement</h4>";
for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
}

echo "<h4>The continue Statement</h4>";
for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
}

echo "<h1>PHP foreach Loop</h1>";

echo "<h4>The foreach Loop on Arrays</h4>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    echo "$x <br>";
}

echo "<h4>Keys and Values</h4>";
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
    echo "$x : $y <br>";
}

echo "<h4>The foreach Loop on Objects</h4>";
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
    }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
}

echo "<h4>The break Statement</h4>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
}

echo "<h4>The continue Statement</h4>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "blue") continue;
    echo "$x <br>";
}

echo "<h4>Foreach Byref</h4>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
    if ($x == "blue") $x = "pink";
}

var_dump($colors);

echo "<h4>Alternative Syntax</h4>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
    echo "$x <br>";
endforeach;
?>