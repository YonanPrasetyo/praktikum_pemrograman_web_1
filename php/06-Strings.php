<?php

echo"<h1>PHP Strings</h1>";

echo "<h4>Double or Single Quotes?</h4>";

$x = "John";
echo "Hello $x";
echo "<br>";
echo 'Hello $x';


echo "<h4>String Length</h4>";
echo strlen("Hello world!");


echo "<h4>Word Count</h4>";
echo str_word_count("Hello world!");


echo "<h4>Search For Text Within a String</h4>";
echo strpos("Hello world!","world");


echo "<h1>PHP - Modify Strings</h1>";

$x = "Hello World!";

echo "<h4>Upper Case</h4>";
echo strtoupper($x);

echo "<h4>Lower Case</h4>";
echo strtolower($x);

echo "<h4>Replace String</h4>";
echo str_replace("World", "Dolly", $x);

echo "<h4>Reverse a String</h4>";
echo strrev($x);

echo "<h4>Remove Whitespace</h4>";
$z = " Hello World! ";
echo trim($z);

echo "<h4>Convert String into Array</h4>";
$y = explode(" ", $x);
print_r($y);

echo "<h1>PHP - Concatenate Strings</h1>";

$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

echo "<br>";

$a = "$x $y";
echo $a;

echo "<h1>PHP - Slicing Strings</h1>";

$x = "Hello World!";
echo "<h4>Slicing</h4>";
echo substr($x, 6, 5);

echo "<h4>Slice to the End</h4>";
echo substr($x, 6);

echo "<h4>Slice From the End</h4>";
echo substr($x, -5, 3);

echo "<h4>Negative Length</h4>";
$x = "Hi, how are you?";
echo substr($x, 5, -3);

echo "<h1>PHP - Escape Characters</h1>";
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;

?>