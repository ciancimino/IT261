<!DOCTYPE html> <!--Updated doctype-->
<html> 
<head>
<title>My Adder Assignment</title>
    <meta charset="UTF-8">
<style>
    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }
    
    .red-text {
        color: red;
    }
    
</style>
</head>
<body>  
    <h1>Adder.php</h1>   

    <form action="" method="post">
        <label> Enter the first number:</label>
        <input type="text" name="num1"><br>  
        <label>Enter the second number:</label>
        <input type="text" name="num2"><br>  
        <input type="submit" value="Add Em!!">   
    </form> 

    <?php     //adder-wrong.php

    if (isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    // removed - and N
    $myTotal = $num1 + $num2;
    // removed spaces a changed " to ' 
    echo '<h2>You added '.$num1.' and '.$num2.'</h2>';
    // added span to style and removed extra "'s
    echo '<p><span style="color: black">and the answer is</span><br><span style="color: red">'.$myTotal.'</span><span style="color: black">!</span></p>';
    // added space after echo and closed p tag
    echo '<p><a href="">Reset page</a></p>';
    }
    ?>   
         <!--Updated closing tags-->                     
  </body>  
  </html>