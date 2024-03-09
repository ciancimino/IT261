<?php

// do not call out header include yet

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: fruits.php');
}

$sql = 'SELECT * FROM fruits WHERE fruit_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        $fruit_name = stripcslashes($row['fruit_name']);
        $fruit_color = stripcslashes($row['fruit_color']);
        $fruit_store = stripcslashes($row['fruit_store']);
        $fruit_region = stripcslashes($row['fruit_region']);
        $fruit_season = stripcslashes($row['fruit_season']);
        $details = stripcslashes($row['details']);

        $feedback = '';

    } // close while loop

} else {
    $feedback = 'Houston, we have a problem';
}

include('includes/header.php'); 

?>

<main>

<h1>Welcome to our Fruit View Page</h1>
<h2>Introducing:
    <?php echo $fruit_name;?>
</h2>

<ul>
    <?php
    echo '
    <li><b>Fruit Name:</b> '.$fruit_name.'</li>
    <li><b>Fruit Color:</b> '.$fruit_color.'</li>
    <li><b>Purchase at:</b> '.$fruit_store.'</li>
    <li><b>Generally from this region:</b> '.$fruit_region.'</li>
    <li><b>Best season:</b> '.$fruit_season.'</li>
    ';
    ?>
</ul>

    <p>
        Return to our <a href="fruits.php">main fruits page</a>
    </p>

</main>

<aside>
    <h3>What does this fruit look like?!</h3>
    <figure>
        <img src="images/fruit<?php echo $id;?>.jpeg" alt="<?php echo $fruit_name;?>">
            <figcaption>
                <?php echo $details;?>
            </figcaption>
    </figure>
</aside>



<!-- end wraper -->

<?php 

@mysqli_free_result($result);

@mysqli_close($iConn);

include('includes/footer.php');