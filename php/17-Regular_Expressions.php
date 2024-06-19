<?php

echo"<h4>Using preg_match()</h4>";

$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);

echo "<h4>Using preg_match_all()</h4>";
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);

echo "<h4>Using preg_replace()</h4>";
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
?>