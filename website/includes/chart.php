<?php

$article['October_13_2023'] = 'oct13_I was 11 years old when I went to a tattoo shop for the first time';
$article['October_23_2023'] = 'oct23_Tattoos serve as reflections of the cultures from which they originate, offering valuable insights into the past';
$article['October_25_2023'] = 'oct25_What\'s the deal with Ignorant tattoos?';
$article['November_06_2023'] = 'nov06_An after thought on tattoo aftercare';
$article['November_27_2023'] = 'nov27_4 Reasons to not get tattooed by a robot';
$article['December_14_2023'] = 'dec14_Sailor Jerry: Navigating the Seas of Artistic Innovation';

?>

    <table>
        <?php foreach($article as $date =>$title)  :?>
        <tr>
            <td><img src="images/<?php echo substr($title, 0, 5) ;?>.jpg" alt="<?php 
            echo str_replace('_', ' ', $date) ;?>"> </td>

            <td><b>Posted on</b> <?php 
            echo str_replace('_', ' ', $date) ;?></td>

            <td><b>By Alexandra Ciancimino:</b><br><?php echo substr($title, 6); ?></td>
        
        </tr>
        <?php endforeach ; ?>
</table>