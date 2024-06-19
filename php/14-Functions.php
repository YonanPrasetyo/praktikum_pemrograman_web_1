<?php declare(strict_types=1); // strict requirement

echo "<h4>Create and Call a Function</h4>";
function myMessage() {
    echo "Hello world!";
}

myMessage();

echo "<h4>PHP Function Arguments</h4>";
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

echo "<h4>PHP Default Argument Value</h4>";
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

echo "<h4>PHP Functions - Returning values</h4>";
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

echo "<h4>Passing Arguments by Reference</h4>";
function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;

echo "<h4>Variable Number of Arguments</h4>";
function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo "$a<br>";

function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
        $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

echo "<h4>PHP Return Type Declarations</h4>";
function addNumbers(float $a, float $b) : int {
    return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);

?>