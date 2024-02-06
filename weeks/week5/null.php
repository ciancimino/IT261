<?php
echo '<h2>First example of "a" : is false, NOT NULL</h2>';
$a = 0;
echo "a is " . is_null($a) . "<br>";

echo '<h2>Second example of "b" : echoing "1" which equals TRUE </h2>';
$b = null;
echo "b is " . is_null($b) . "<br>";

echo '<h2>Third example of "c" : IS NOT NULL </h2>';
$c = "null";
echo "c is " . is_null($c) . "<br>";

echo '<h2>Forth example of "d" : is NULL</h2>';
$d = NULL;
echo "d is " . is_null($d) . "<br>";
?>