<?php

// 1 ruble = 0.017 dollars
// 1 pound = 1.15 dollars
// 1 canadian dollar = .76 dollars
// 1 euro = 1.00 dollars
// 1 yen = .0074 dollars

// rubles = 10007 = 170.11
// pounds = 500 = 575.00
// canadian dollar = 5000 = 3800.00
// euro = 1200 = 1200.00
// yen = 2000 = 14.80

$ruble_rate = 0.017 ;
$pound_rate = 1.15 ;
$canadian_rate = .76 ;
$euro_rate = 1.00 ;
$yen_rate = .0074 ;

$ruble = 10007;
$pound = 500;
$canadian = 5321;
$euro = 1291;
$yen = 4000;

$ruble_converted = $ruble * $ruble_rate;
$pound_converted = $pound * $pound_rate;
$canadian_converted = $canadian * $canadian_rate;
$euro_converted = $euro * $euro_rate;
$yen_converted = $yen * $yen_rate;

$total = $ruble_converted + $pound_converted + $canadian_converted +
$euro_converted + $yen_converted;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Logic Excercise</title>

    <style>
    * {
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    #wrapper {
        width:500px;
        margin:30px auto;
    }

    table {
        border:1px solid black;
        width: 500px;
    }

    th, td {
        border:1px solid black;
        padding: 8px;
    }

    h1, h2, h3 {
        text-align: center;
    }
    </style>
</head>
<body>
<div id="wrapper">
    <h1>After traveling, we have returned home with the following currencies:</h1>
    <ul>
        <li>Rubles</li>
        <li>Pounds</li>
        <li>Canadian Dollars</li>
        <li>Euros</li>
        <li>Yens</li>
    </ul>
    <h2>What Shall We Do?</h2>
    <table>
        <tr>
        <th colspan="2">Currency</th>
        <th>Dollars</th>
        </tr>
        <tr>
        <th>Rubles</th>
        <td><?php echo $ruble; ?></td>
        <td>$<?php echo ''.number_format($ruble_converted, 2).''; ?></td>
        </tr>
        </tr>
        <tr>
        <th>Pounds</th>
        <td><?php echo $pound; ?></td>
        <td>$<?php echo ''.number_format($pound_converted, 2).''; ?></td>
        </tr>
        </tr>
        <tr>
        <th>Canadian Dollars</th>
        <td><?php echo $canadian; ?></td>
        <td>$<?php echo ''.number_format($canadian_converted, 2).''; ?></td>
        </tr>
        </tr>
        <tr>
        <th>Euros</th>
        <td><?php echo $euro; ?></td>
        <td>$<?php echo ''.number_format($euro_converted, 2).''; ?></td>
        </tr>
        </tr>
        <tr>
        <th>Yens</th>
        <td><?php echo $yen; ?></td>
        <td>$<?php echo ''.number_format($yen_converted, 2).''; ?></td>
        </tr>
        <th>Total</th>
        <td>American Dollars</td>
        <td><?php echo ''.number_format($total, 2).''?></td>
        </tr>
    </table>
</div>
<!-- end wrapper -->
</body>
</html>