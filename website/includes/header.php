<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Homepage of my Website Project';
        $body = 'home';
        break;
        
    case 'about.php' :
        $title = 'About page of my Website Project';
        $body = 'about inner';
        break;

    case 'daily.php' :
        $title = 'Daily page of my Website Project';
        $body = 'daily inner';
        break;

    case 'project.php' :
        $title = 'Project page of my Website Project';
        $body = 'project inner';
        break;
        
    case 'contact.php' :
        $title = 'Contact page of my Website Project';
        $body = 'contact inner';
        break;
        
    case 'gallery.php' :
        $title = 'Gallery page of my Website Project';
        $body = 'gallery inner';
        break;
}

// nav array 

$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

// this is the switch for homework 3

if (isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else { 
    $today = date('l');
}

switch($today) {
    case 'Sunday':
        $picture = 'sunday_book.jpeg';
        $details = 'A captivating journey through "The Hobbit" in the magical world of Middle-earth.';
        $book = 'The Hobbit';
        $author = 'J.R.R. Tolkien';
        $alt = 'The Hobbit';
        break;

    case 'Monday':
        $picture = 'monday_book.jpeg';
        $details = 'An inspiring novel that explores the depths of human emotions in "The Fault in Our Stars".';
        $book = 'The Fault in Our Stars';
        $author = 'John Green';
        $alt = 'The Fault in Our Stars';
        break;

    case 'Tuesday':
        $picture = 'tuesday_book.jpeg';
        $details = 'A thrilling mystery that keeps you on the edge of your seat in "Gone Girl".';
        $book = 'Gone Girl';
        $author = 'Gillian Flynn';
        $alt = 'Gone Girl';
        break;

    case 'Wednesday':
        $picture = 'wednesday_book.jpeg';
        $details = 'A heartwarming story about love, friendship, and second chances in "The Notebook".';
        $book = 'The Notebook';
        $author = 'Nicholas Sparks';
        $alt = 'The Notebook';
        break;

    case 'Thursday':
        $picture = 'thursday_book.jpeg';
        $details = 'A mind-bending sci-fi adventure that explores the possibilities of the universe in "Dune".';
        $book = 'Dune';
        $author = 'Frank Herbert';
        $alt = 'Dune';
        break;

    case 'Friday':
        $picture = 'friday_book.jpeg';
        $details = 'A laugh-out-loud comedy that takes you on a hilarious journey in "Good Omens".';
        $book = 'Good Omens';
        $author = 'Neil Gaiman and Terry Pratchett';
        $alt = 'Good Omens';
        break;

    case 'Saturday':
        $picture = 'saturday_book.jpeg';
        $details = 'A thought-provoking memoir that shares the author\'s life experiences in "Educated".';
        $book = 'Educated';
        $author = 'Tara Westover';
        $alt = 'Educated';
        break;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $title; ?>">
<header>
    <div class="inner-header">
    <a href="index.php">
    <img id="logo" src="images/it261aclogo.png" alt="logo example">
    </a>
    <!-- old html nav
        <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Daily</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>
        </ul> 
        </nav> 
    -->

    <nav>
        <ul>
        <?php
        foreach($nav as $key => $value) {
            if (THIS_PAGE == $key) {
                echo '<li><a style="color:red;" href="'.$key.'"> '.$value.' </a></li>';
            } else {
                echo '<li><a style="color:green;" href="'.$key.'"> '.$value.' </a></li>';
            }
        } //end foreach
        ?>
        </ul>
    </nav>  
    </div>
    <!-- end inner-header -->
</header>