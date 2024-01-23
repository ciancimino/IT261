<?php 

// $variable = 'this is our variable';

/*
if(isset($variable)) {
    echo 'Variable is set';
} else echo 'Variable not set';

echo '<br>'; 

if(isset($GET['today'])) {
    echo 'Today has been set';
} else echo 'not!';
*/



if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday' :
    $pastry = 'Crossiant';
    $pic = 'crossiant.jpeg';
    $alt = 'Crossiant';
    $content = '<p>A croissant is a French pastry made from puff pastry in a crescent shape. It is a buttery, flaky, viennoiserie pastry inspired by the shape of the Austrian kipferl but using the French yeast-leavened laminated dough.</p>';
    break;

    case 'Monday' :
    $pastry = 'Eclair';
    $pic = 'Eclair.jpeg';
    $alt = 'Eclair';
    $content = '<p>A Eclair is a pastry made with choux dough filled with a cream and topped with a flavored icing. The dough, which is the same as that used for profiterole, is typically piped into an oblong shape with a pastry bag and baked until it is crisp and hollow inside. </p>';
    break;

    case 'Tuesday' :
    $pastry = 'Petit Four';
    $pic = 'PetitFour.jpeg';
    $alt = 'Petit Four';
    $content = '<p>A petit four is a small bite-sized confectionery or savory appetizer. The name is French, petit four, meaning "small oven".</p>';
    break;

    case 'Wednesday' :
    $pastry = 'Strudel';
    $pic = 'Strudel.jpeg';
    $alt = 'Strudel';
    $content = '<p>A strudel is a type of layered pastry with a filling that is usually sweet, but savoury fillings are also common. It became popular in the 18th century throughout the Habsburg Empire. Strudel is part of Austrian cuisine and German cuisine but is also common in other Central European cuisines</p>';
    break;

    case 'Thursday' :
    $pastry = 'Turnover';
    $pic = 'Turnover.jpeg';
    $alt = 'Turnover';
    $content = '<p>A turnover is a type of pastry made by placing a filling on a piece of dough, folding the dough over, sealing it, and then baking it. Turnovers can be sweet or savoury and are often made as a sort of portable meal or dessert. They are often eaten for breakfast.</p>';
    break;

    case 'Friday' :
    $pastry = 'Baklava';
    $pic = 'baklava.jpeg';
    $alt = 'Baklava';
    $content = '<p>Baklava is a layered pastry dessert made of filo pastry sheets, filled with chopped nuts, and sweetened with syrup or honey. It was one of the most popular sweet pastries in the Ottoman Empire</p>';
    break;

    case 'Saturday' :
    $pastry = 'Donut';
    $pic = 'donut.jpeg';
    $alt = 'Donut';
    $content = '<p>donut is a type of food made from leavened fried dough. It is popular in many countries and is prepared in various forms as a sweet snack that can be homemade or purchased in bakeries, supermarkets, food stalls, and franchised specialty vendors.</p>';
    break;
}

$dealMessage = "<h2>$today you get a free $pastry</h2>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Excerise</title>
    <style>

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box; 
    }

    #wraper {
        width: 940px;
        margin: 20px auto;
    }

    h1, h2, img {
        margin-bottom: 10px;
    }

    p {
        margin-bottom: 20px;
    }

    </style>
</head>
<body>
    <div id="wrapper">
        <h1>My Switch Project</h1>
        <?php 
        echo $dealMessage;
        echo '<br>'
        ?>
        <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
        <?php 
        echo $content;
        ?>
    <h2> Our Daily Deals!</h2>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a> </li>
        <li><a href="switch.php?today=Monday">Monday</a> </li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a> </li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a> </li>
        <li><a href="switch.php?today=Thursday">Thursday</a> </li>
        <li><a href="switch.php?today=Friday">Friday</a> </li>
        <li><a href="switch.php?today=Saturday">Saturday</a> </li>
    </ul>
    
     
    </div> <!-- end wrapper -->
</body>
</html>