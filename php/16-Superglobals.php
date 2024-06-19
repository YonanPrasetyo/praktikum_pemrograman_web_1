<?php

echo '<h4>$GLOBALS</h4>';
$x = 75;
function myfunction() {
    echo $GLOBALS['x'];
}
myfunction();

echo '<br>';

$x = 75;
function myfunction2() {
    global $x;
    echo $x;
}
myfunction2();
?>