<?php
include('config.php');
include('./includes/header.php');
?>

<div id="contactwrapper">
    <main id="contactmain">
        <h1>Welcome to my contact page!</h1>
        
        <p>I'm excited to talk to you!</p>

        <?php include('./includes/form.php');
        ?>
    </main>
    <aside id="contactaside">
        <h3>Response Time:</h3>
        <p>To all inquires - I will respond within a few business days. Talk soon!</p>
    </aside>    
</div> <!-- end wrapper -->


<?php
include('./includes/footer.php');