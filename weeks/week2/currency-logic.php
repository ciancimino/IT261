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
        <td>10007</td>
        <td>170.11</td>
        </tr>
        </tr>
        <tr>
        <th>Pounds</th>
        <td>500</td>
        <td>575</td>
        </tr>
        </tr>
        <tr>
        <th>Canadian Dollars</th>
        <td>5000</td>
        <td>3800</td>
        </tr>
        </tr>
        <tr>
        <th>Euros</th>
        <td>1200</td>
        <td>1200</td>
        </tr>
        </tr>
        <tr>
        <th>Yens</th>
        <td>2000</td>
        <td>14.80</td>
        </tr>
    </table>
</div>
<!-- end wrapper -->
</body>
</html>