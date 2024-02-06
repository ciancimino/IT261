<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Cost Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h2>My Calculator</h2>
    <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
            <label>Name:</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars ($_POST['name']);?>">

            <label>Total miles in trip:</label>
            <input type="number" name="totalMiles" value="<?php if(isset($_POST['totalMiles'])) echo htmlspecialchars ($_POST['totalMiles']);?>">

            <label>Average speed (mph):</label>
            <input type="number" name="averageSpeed" value="<?php if(isset($_POST['averageSpeed'])) echo htmlspecialchars ($_POST['averageSpeed']);?>">

            <label>Max hours your will drive in one day:</label>
            <input type="number" name="hoursPerDay" value="<?php if(isset($_POST['hoursPerDay'])) echo htmlspecialchars ($_POST['hoursPerDay']);?>">

            <label>How much is gas?</label>
            <ul>
                <li><input type="radio" name="gasPrice" value="3.00" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 3.00) echo 'checked="checked"'; ?>> $3.00 </li>
                <li><input type="radio" name="gasPrice" value="3.50" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 3.50) echo 'checked="checked"'; ?>> $3.50 </li>
                <li><input type="radio" name="gasPrice" value="4.00" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 4.00) echo 'checked="checked"'; ?>> $4.00 </li>
            </ul>

            <label>Average MPG:</label>
            <select name="averageMPG">
                <option value="" <?php if(isset($_POST['averageMPG']) && is_null($_POST['averageMPG'])) echo 'selected = "unselected"' ;?>>Select MPG</option>
                <option value="40" <?php if(isset($_POST['averageMPG']) && $_POST['averageMPG'] == 40) echo 'selected = "selected"';?>>BEST! 40 mpg</option>
                <option value="30" <?php if(isset($_POST['averageMPG']) && $_POST['averageMPG'] == 30) echo 'selected = "selected"';?>>GREAT! 30 mpg</option>
                <option value="20" <?php if(isset($_POST['averageMPG']) && $_POST['averageMPG'] == 20) echo 'selected = "selected"';?>>AVERAGE! 20 mpg</option>
                <option value="10" <?php if(isset($_POST['averageMPG']) && $_POST['averageMPG'] == 10) echo 'selected = "selected"';?>>POOR! 10 mpg</option>
            </select>

            <input type="submit" value="Calculate Cost">

            <p><a href="">Reset Form</a></p>
        </fieldset> 
    </form>

    <?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Validate Name
        if (empty($_POST['name']
        )) {
            echo '<p class="error">Please enter your name!';
        } 

        // Validate Total Miles
        if (empty($_POST['totalMiles']
        )) {
            echo '<p class="error">Please enter the total miles for your trip!</p>';
        } 

        // Validate Average Speed
        if (empty($_POST['averageSpeed']
        )) {
            echo '<p class="error">Please enter the average speed for your trip!</p>';
        } 

        // Validate Hours Per Day
        if (empty($_POST['hoursPerDay']
        )) {
            echo '<p class="error">Please enter the number of hours you will drive per day!</p>';
        } 

        // Validate Gas Price
        if (empty($_POST['gasPrice']
        )) {
            echo '<p class="error">Please select the gas price!</p>';
        } 

        // Validate Average MPG
        if ($_POST['averageMPG'] == NULL
        ) {
            echo '<p class="error">Please select the average MPG!</p>';
        } 

        if (isset($_POST['name'],
            $_POST['totalMiles'],
            $_POST['averageSpeed'],
            $_POST['hoursPerDay'],
            $_POST['gasPrice'],
            $_POST['averageMPG']
        )) {
            // If there are no errors, calculate trip details
            $name = htmlspecialchars($_POST['name']);
            $totalMiles = floatval($_POST['totalMiles']);
            $averageSpeed = floatval($_POST['averageSpeed']);
            $hoursPerDay = floatval($_POST['hoursPerDay']);
            $gasPrice = floatval($_POST['gasPrice']);
            $averageMPG = floatval($_POST['averageMPG']);
            $totalHours = $totalMiles / $averageSpeed; // Calculate total hours of the trip
            $days = $totalHours / $hoursPerDay; // Calculate the number of days for the trip
            $gallons = $totalMiles / $averageMPG; // Calculate the total gallons of gas needed
            $cost = $gallons * $gasPrice; // Calculate the total cost of gas

            if(!empty(($totalMiles !=0) && ($averageSpeed !=0) && ($hoursPerDay !=0) && $gasPrice && ($averageMPG !=NULL)
            )) {
            echo '
            <div class="box">
                <p>Hello '.$name.', You will be traveling a total of <b>'.number_format($totalHours, 2).'</b> hours, taking <b>'.$days.'</b> days. 
                You will be using <b>'.number_format($gallons, 2).'</b> gallons of gas, and it will cost you <b>$'.number_format($cost, 2).'</b> dollars.</p> 
            </div>
            ';
            }
        }
    }
    ?>
</body>
</html>