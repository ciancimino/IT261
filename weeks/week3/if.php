<?php 

// if statement 
// if else statement
// if elseif statement

$temp = 65;
if($temp <= 60) {
    echo 'It is a semi warm day!';
} else {
    echo 'It may be getting warmer';
}
echo '<br>';
$newtemp = 99; 
if ($newtemp <=60) {
    echo 'Not a very warm day!';
} elseif ($newtemp <=70) {
    echo 'It\'s getting warmer';
} elseif ($newtemp <=80) {
    echo 'We might go to the beach!';
} else {
    echo 'We will <b>for sure</b> go to the beach!';
}
echo '<br>';

echo '<h2>This excercise will be about a salary, a bonus and sales!</h2>';

// starting salary of 95000 0% if sales is <=99999
// sales above 100000, you will make a bonus!
// 100000 = 5% if sales is <= 119999 
// 120000 = 10% if sales is <= 139999
// 140000 = 15% if sales is <= 149999 
// 150000 = 20%

$salary = 95000;
$sales = 150000;

if ($sales <= 99999) {
    echo 'Sorry you did not make your bonus! :(';
} elseif ($sales <=119999 ) {
    $salary *= 1.05;
    echo '$'.number_format($salary, 2).' dollars';
} elseif ($sales <=139999 ) {
    $salary *= 1.10;
    echo '$'.number_format($salary, 2).' dollars';
} elseif ($sales <=149999 ) {
    $salary *= 1.15;
    echo '$'.number_format($salary, 2).' dollars';
} else {
    $salary *= 1.20;
    echo 'Awesome! you made a 20% bonus! Your annual salary including bonus totals $'.number_format($salary, 2).' dollars';
}

