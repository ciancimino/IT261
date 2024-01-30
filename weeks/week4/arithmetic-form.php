<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic-form.php</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Arithmetic Form</h1>
    <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">
            <label>Phone</label>
            <input type="tel" name="phone">
            <label>How many Lattes?</label>
            <input type="number" name="lattes">
            <label>How many Capucinos?</label>
            <input type="number" name="capucinos">
            <label>How many Americanos?</label>
            <input type="number" name="americanos">
            <label>Any other request?</label>
            <textarea name="comments"></textarea>
            <input type="Submit" value="Send my order">
        </fieldset>
    </form>
    <p><a href="">RESET</a></p>
    <?php
    date_default_timezone_set('America/Los_Angeles'); 
    $our_time = date('H:i');
    If(isset($_POST['name'],
    $_POST['phone'],
    $_POST['lattes'],
    $_POST['capucinos'],
    $_POST['americanos'],
    $_POST['comments']
    )) {

        if(empty($_POST['name'] &&
        $_POST['phone'] &&
        $_POST['lattes'] &&
        $_POST['capucinos'] &&
        $_POST['americanos'] &&
        $_POST['comments'] 
        )) {
            echo '<p class="error">Please fill out all of the fields!</p>';
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $lattes = $_POST['lattes'];
            $capucinos = $_POST['capucinos'];
            $americanos = $_POST['americanos'];
            $comments = $_POST['comments'];
            $total = $lattes + $capucinos + $americanos;

            if ($our_time <= 11) {
                $our_time = "Good Morning";
            } elseif ($our_time <= 17) {
                $our_time = "Good Afternoon";
            } else {
                $our_time = "Good Evening";
            }
            echo '
            <div class="box">
            <h2> '.$our_time.' '.$name.'!</h2>
            <p>We have texted your order to this <b>number '.$phone.'</b> totaling '.$total.' beverages:</p>
            <ul>
            <li> '.$lattes.' lattes</li>
            <li> '.$capucinos.' capucinos</li>
            <li> '.$americanos.' americano</li>
            </ul>
            <p>Special <b>requests</b>: '.$comments.'</p>
            <p>Thank you for choosing our Cafe!</p>
            </div>
            ';
        }
    }

    ?>
</body>
</html>