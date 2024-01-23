<?php

//  nav

echo '<h2>Time for out navigation that will again have both a key and a value</h2>';

$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li><a href="'.$key.'"> '.$value.' </a></li>';
}
echo '</ul>';

echo '<h2>Our Navigation will display a different color when on the index.php page!</h2>';

// define constant 

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// adding an if statement: if we are on this_page and it is the index.php page, do something

echo '<ul>';
foreach($nav as $key => $value) {
    if (THIS_PAGE == $key) {
        echo '<li><a style="color:red;" href="'.$key.'"> '.$value.' </a></li>';
    } else {
        echo '<li><a style="color:green;" href="'.$key.'"> '.$value.' </a></li>';
    }
} //end foreach
echo '</ul>';