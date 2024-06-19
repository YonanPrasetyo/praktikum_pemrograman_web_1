<?php

echo "<h4>PHP - The if Statement</h4>";
if (5 > 3) {
    echo "Have a good day!";
}

echo "<h4>Comparison Operators</h4>";
$t = 14;

if ($t == 14) {
    echo "Have a good day!";
}

echo "<h4>Logical Operators</h4>";
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
    echo "Both conditions are true";
}
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
    echo "<br>$a is a number between 2 and 7";
}

echo "<h4>PHP - The if...else Statement</h4>";
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<h4>PHP - The if...elseif...else Statement</h4>";
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<h4>Short Hand If</h4>";
$a = 5;
if ($a < 10) $b = "Hello";
echo $b;

echo "<h4>Short Hand If...Else</h4>";
$a = 13;
$b = $a < 10 ? "Hello" : "Good Bye";
echo $b;

echo "<h4>Nested If</h4>";
$a = 13;

if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
        echo " but not above 20";
    }
}
?>