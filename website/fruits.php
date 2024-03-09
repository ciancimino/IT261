<?php
include('config.php');
include('includes/header.php');
?>

<main>
<h1>Welcome to my Fruits Page</h1>

<?php

$sql = 'SELECT * FROM fruits';

// connect to database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        echo '
        <h2>Information about: '.$row['fruit_name'].' </h2>

        <ul>
            <li>Color: '.$row['fruit_color'].' </li>
            <li>Region: '.$row['fruit_region'].' </li>
        </ul>
        
        <p>For more information about '.$row['fruit_name'].', click <a href="fruits-view.php?id='.$row['fruit_id'].'">here</a></p>
        ';

    } // end while loop
}

else {
    echo 'nobody home!';
}

// end if statement

@mysqli_free_result($result);

@mysqli_close($iConn);

?>

</main>

<aside>

<h3>Why Share My Favorite Fruits?</h3>

<p>
Fruits are packed with essential nutrients like vitamins, minerals, fiber, and antioxidants, which are vital for overall health. They provide natural sugars for energy, without the added sugars found in many processed foods. Plus, their fiber content aids digestion and helps maintain a healthy gut microbiome. Regular fruit consumption has been linked to reduced risk of chronic diseases like heart disease, stroke, and certain cancers. Additionally, fruits are hydrating and low in calories, making them a great choice for weight management. So, incorporating a variety of fruits into your diet can contribute to a balanced and nutritious lifestyle.
<p>

</aside>


<!-- end wrapper -->



<?php
include('includes/footer.php');