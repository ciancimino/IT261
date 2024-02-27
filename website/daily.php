<?php
include('config.php');
include('./includes/header.php');
?>

<div id="dailywrapper">
        <h1>My Book of the Day</h1>
        
        <div>
            <img src="./images/<?php echo $picture; ?>" alt="<?php echo $alt; ?> Book"> 
            <h2><?php echo $book; ?></h2>
            <p>By <?php echo $author; ?></p>
            <p><?php echo $details; ?></p>
        </div>

        <h2>Want another recommendation?</h2>
        <p>See my other books of the week!</p>
        <ul>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
    </div> <!-- end wrapper -->



<?php
include('./includes/footer.php');