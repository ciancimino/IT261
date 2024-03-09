<?php

// do not call out header include yet

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: people.php');
}

$sql = 'SELECT * FROM people WHERE people_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $email = stripcslashes($row['email']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $details = stripcslashes($row['details']);

        $feedback = '';

    } // close while loop

} else {
    $feedback = 'Houston, we have a problem';
}

include('.includes/header.php'); 

?>

<main>

<h1>Welcome to our People View Page</h1>
<h2>Introducing: </h2>

</main>

<aside>

</aside>

</div>

<?php 

include('.includes/footer.php');