<?php

echo "<h4>PHP Integers</h4>";

$x = 5985;
var_dump(is_int($x));

echo "<br>";

$x = 59.85;
var_dump(is_int($x));

echo "<h4>PHP Floats</h4>";
$x = 10.365;
var_dump(is_float($x));

echo "<h4>PHP Infinity</h4>";
$x = 1.9e411;
var_dump($x);

echo "<h4>PHP NaN</h4>";
$x = acos(8);
var_dump($x);

echo "<h4>PHP Numerical Strings</h4>";

$x = 5985;
var_dump(is_numeric($x)); echo "<br>";

$x = "5985";
var_dump(is_numeric($x)); echo "<br>";
$x = "59.85" + 100;
var_dump(is_numeric($x)); echo "<br>";

$x = "Hello";
var_dump(is_numeric($x)); 

echo "<h4>PHP Casting Strings and Floats to Integers</h4>";
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast; echo "<br>";
var_dump($int_cast);

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast; echo "<br>";
var_dump($int_cast);
?>