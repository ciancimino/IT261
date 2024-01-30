<?php 
// if a field is empty, we need to do something

if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['comments'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];

        if(empty($_POST['first_name'] &&
        $_POST['last_name'] && 
        $_POST['email'] && 
        $_POST['comments'])) {
        
        echo 'Please fill out all of the fields';
            
        } else {

        echo $first_name;
        echo '<br>';
        echo $last_name;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $comments;
        echo '<br>';

        } // end else

        } // end isset
        else {
        echo '
        
        <form action="" method="post">

        <label>FIRST NAME</lable>
        <input type="text" name="first_name">

        <label>LAST NAME</lable>
        <input type="text" name="last_name">

        <label>EMAIL</lable>
        <input type="email" name="email">

        <label>COMMENTS</lable>
        <textarea name="comments"></textarea>

        <input type="submit" value="Send it!">
        </form>
        <p><a href="">RESET</a></p>
        ';
        } // end else
            
        