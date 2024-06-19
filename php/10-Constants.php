<?php

echo "<h4>Create a PHP Constant</h4>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<h4>PHP const Keyword</h4>";
const MYCAR = "Volvo";
echo MYCAR;

echo "<h4>PHP Constant Arrays</h4>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];


echo "<h4>Constants are Global</h4>";
define("GREETING2", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING2;
}

myTest();
?>