<?php

echo date('Y');

echo '<br>';
echo date('l, F j, Y H:i: A');

echo '<br>';
date_default_timezone_set('America/Los_Angeles');

echo '<br>';
echo date('l, F j, Y H:i: A');

echo '<br>';

$name = 'Alexandra';
$our_time = date('H:i A');

echo '<br>';
echo $our_time;
echo '<br>';

if($our_time <= 11) {
    echo '<h2 style="color:yellow">Good Morning, '.$name.' </h2>
    <img src="images/sun.png" alt="sun">
    <p>It\'s time to get up</p>
    ';
} elseif ($our_time <= 17) {
    echo '<h2 style="color:pink">Good Afternoon, '.$name.' </h2>
    <img src="images/cloud.jpeg" alt="cloud">
    <p>Have a great day!</p>
    ';
} else {
    echo '<h2 style="color:blue">Good Evening, '.$name.' </h2>
    <img src="images/moon.jpeg" alt="moon">
    <p>Time to wind down!</p>
    ';
}
echo '<br>';

echo '<h2>The difference between 12h and 24h is a little H and big H</h2>';
echo '<br>';
echo '24 hours usings a Big H:';
echo '<br>';
echo date('l, F j, Y H:i: A');
echo '<br>';
echo '<br>';
echo '12 hours (AM/PM) using a little h:';
echo '<br>';
echo date('l, F j, Y h:i: A');