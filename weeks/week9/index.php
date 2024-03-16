<?php
session_start();

include('config.php');

if (!isset($_SESSION['username'])) {
    header('Location:login.php');
    exit(); // Ensure that the script stops execution after redirecting
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
    exit(); // Ensure that the script stops execution after redirecting
}

include('./includes/header.php');

?>

<header>

<?php if(isset($_SESSION['success'])): ?>


<div class="success">
    <h3><?php echo $_SESSION['success']; ?></h3>
</div>

<?php unset($_SESSION['success']); // Unset success message after displaying ?>

<?php endif; ?>

<?php if(isset($_SESSION['username'])): ?>

<div class="welcome-logout">
    <h3>Hello <?php echo $_SESSION['username']; ?>!</h3> 
    <a href="index.php?logout=1">Log out</a>
</div>

<?php endif; ?>
</header>

<div id="wrapper">
<h1>Welcome to the home page of our website!</h1>

</div>
<!-- end wrapper -->

<?php include('./includes/footer.php');?>