<?php

$name = 'Alexandra';
$first_name = 'Alexandra';
$last_name = 'Ciancimino';
echo '<br>';
$name = 'Alexandra';
$name .= ' Ciancimino'; // .= joins
echo $name;
echo '<br>';
$color = 'black';
echo $color;
echo '<br>';
echo 'Alexandra\'s favorite color is '.$color.' ';
echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;
echo '<br>';
$x = 20;
$x += 5;
echo $x;
echo '<br>';
$x = 100;
$x /= 10;
echo $x;
echo '<br>';
echo '<h3>Our product and quantity and tax</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;
echo '<br>';
echo '<h3>Relfect our amount to reflect 2 decimal places, we need to show floats and a new function</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2);
echo $total_friendly;
echo '<br>';
echo 'We have a total of <b>$'.$total_friendly.'</b> dollars';
echo '<br>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098;
echo 'We have a total of <b>$'.number_format($total, 2).'</b> dollars';
echo '<h3>Second preset function is our date function</h3>';
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("l jS \of F Y h:i:s A"); // F is month Y is Year Hours:Iminutes:Seconds 
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<h3>Time for an array!</h3>';
echo '<h4>Below is an indexed array</h4>';
$fruit[] = 'bananas';
$fruit[] = 'cherries';
$fruit[] = 'melon';
$fruit[] = 'kiwi';
$fruit[] = 'oranges';
$fruit[] = 'apples';
echo $fruit;
echo '<br>';
echo $fruit[2];
echo '<br>';
$fruit = array (
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples',
);
echo '<br>';
// index arrays
$fruit = [
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples',
];
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);
echo '<h4>Below is an associative array</h4>';
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';