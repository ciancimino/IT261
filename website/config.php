<?php

ob_start();

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

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a style="color:red;" href="'.$key.'"> '.$value.' </a></li>';
    } else {
        $my_return .= '<li><a style="color:black;" href="'.$key.'"> '.$value.' </a></li>';
    }
    }// end for each

    return $my_return;
} // end function

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



// my contact form

$first_name = '';
$first_name_err = '';

$last_name = '';
$last_name_err = '';

$email = '';
$email_err = '';

$phone = '';
$phone_err = '';

$privacy = '';
$privacy_err = '';

$contact_option = '';
$contact_option_err = '';

$days = '';
$days_err ='';

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty($_POST['first_name'])) {
        $first_name_err = 'Please fill out your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_err = 'Please fill out your email address';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['phone'])) {
        $phone_err = 'Please fill out your phone number';
    } else {
        $phone = $_POST['phone'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err = 'Please agree to the privacy policy';
    } else {
        $privacy = $_POST['privacy'];
    }

    if(empty($_POST['contact_option'])) {
        $contact_option_err = 'Please choose perfered method of contact';
    } else {
        $contact_option = $_POST['contact_option'];
    }

    if(empty($_POST['days'])) {
        $days_err = 'Please let us know when you are available!';
    } else {
        $days = $_POST['days'];
    }

    function my_days($days) {
        $my_return='';
        if(!empty($_POST['days'])) {
            $my_return = implode(', ' , $_POST['days']);
        }
        return $my_return;
    }

    // end my_days function

    if(isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['privacy'],
        $_POST['contact_option'],
        $_POST['days']
    )) {
        $to = 'alexnciancimino@gmail.com';
        $subject = 'Test email on '.date('m/d/y, h i A');
        $body = '
        First Name: '.$first_name.' '.PHP_EOL.'
        Last Name: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Contact Method: '.$contact_option.' '.PHP_EOL.'
        Available: '.my_days($days).' '.PHP_EOL.'
        ';

        $header = array(
            'From' => 'alexandranciancimino@gmail.com'
        );

        if(!empty(
            $first_name &&
            $last_name &&
            $email &&
            $phone && 
            $contact_option &&
            $days 
        )) {
            mail($to, $subject, $body, $header);
            header ('Location:thx.php');
        }
    }
    
}



// my forms php


$wines = '';
$wines_err = '';

$first_name = '';
$first_name_err = '';

$last_name = '';
$last_name_err = '';

$email = '';
$email_err = '';

$gender = '';
$gender_err = '';

$phone = '';
$phone_err = '';

$regions = '';
$regions_err ='';

$comments = '';
$comments_err = '';

$privacy = '';
$privacy_err = '';


if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty($_POST['wines'])) {
        $wines_err = 'Please select a wine!';
    } else {
        $wines = $_POST['wines'];
    }

    if(empty($_POST['first_name'])) {
        $first_name_err = 'Please fill out your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_err = 'Please fill out your email address';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        $gender_err = 'Please fill out your gender';
    } else {
        $gender = $_POST['gender'];
    }

    if(empty($_POST['phone'])) {
        $phone_err = 'Please fill out your phone number';
    } else {
        $phone = $_POST['phone'];
    }

    if(empty($_POST['regions'])) {
        $regions_err = 'Please fill out your regions';
    } else {
        $regions = $_POST['regions'];
    }

    if(empty($_POST['comments'])) {
        $comments_err = 'Please fill out your comments';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err = 'Please agree to privacy';
    } else {
        $privacy = $_POST['privacy'];
    }

    function my_wines($wines) {
        $my_return='';
        if(!empty($_POST['wines'])) {
            $my_return = implode(',' , $_POST['wines']);
        }
        return $my_return;
    }
    // end my_wines function

    if(isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['phone'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['privacy'],
        $_POST['wines']
    )) {
        $to = 'alexandranciancimino@gmail.com';
        $subject = 'Test email on '.date('m/d/y, h i A');
        $body = '
        First Name: '.$first_name.' '.PHP_EOL.'
        Last Name: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Gender: '.$gender.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Region: '.$regions.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        Wines: '.my_wines($wines).' '.PHP_EOL.'
        ';

        $header = array(
            'From' => 'noreply@mystudentswa.com'
        );

        if(!empty(
            $first_name &&
            $last_name &&
            $email &&
            $gender &&
            $phone && 
            $regions &&
            $comments &&
            $wines
        )) {
            mail($to, $subject, $body, $header);
            header ('Location:thx.php');
        }
    }
    // end isset
}
// closing server request method