<?php

// far = ($celcius * 9/5) +32;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        table {
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid pink;
        }

        td {
            border-collapse: collapse;
            border: 1px solid pink;
            padding: 5px;
        }

        h1, h2 {
            text-align: center;
            margin: 10px 0px;
            color: pink;
        }
    </style>
</head>
<body>
    <h1>My Celcius / Fahrenheit Table!</h1>
        <table>
            <tr>
                <th>Celcius</th>
                <th>Fahrenheit</th>
            </tr>
            <?php 
                for($cel = 0; $cel <=100; $cel +=5) {
                    $far = ($cel * 9/5) + 32;
                    echo '<tr>';
                    echo '<td> '.$cel.' degrees </td>';
                    echo '<td> '.$far.' degrees </td>';
                    echo '</tr>';
                }
            ?>
        </table>
    <h2>My Kilometer / Mileage Table!</h2>
        <table>
                <tr>
                    <th>Kilometers</th>
                    <th>Miles</th>
                </tr>
                <?php 
                    for($kilo = 0; $kilo <=150; $kilo +=1) {
                        $miles = ($kilo * 0.621371);
                        echo '<tr>';
                        echo '<td> '.$kilo.' kilometers </td>';
                        echo '<td> '.$miles.' miles </td>';
                        echo '</tr>';
                    }
                ?>
            </table>
</body>
</html>