<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT261 Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1><a href="index.php">Alexandra's it261 Portal Page</a></h1>
<h2>The navigation below represents our BIG assignments.</h2>
<div id="wrapper">
    <nav>
        <ul>
            <li><a href="">Switch</a></li>
            <li><a href="">Troubleshoot</a></li>
            <li><a href="">Calculator</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Database</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </nav>
    <main>
        <h2>About Alexandra</h2>
        <img class="right" src="images/headshot.png" alt="Alexandra Ciancimino">
        <p>Hello! I'm Alexandra, and you can call me Alex if you'd like. My preferred pronouns are she/her.</p>
        <p>In this class, I'm hoping to gain a comprehensive understanding of web design and further refine my skills in this area. As someone with a background in tech startups and non-technical roles, I believe enhancing my web design skills will contribute significantly to my career growth.</p>     
        <p>My career aspirations align with the program at Seattle Central as I aim to incorporate web design into my skill set. With 11 years of experience in non-technical roles at tech startups, including my recent role as Chief of Staff at Flox, I've gained proficiency in operations, management, customer success, and strategic planning. <p>I've been involved in people operations, talent acquisition, and business administration, contributing to the success of companies like Wingz, Postmates, and Zipcar.</p>
        <p>An additional point worth noting is my passion outdoor activities like biking, camping, and traveling. This diversity in interests and experiences helps me approach challenges with a creative and adaptable mindset.</p>
        <img class="screen" src="images/MAMP.png" alt="MAMP Confirmation Screenshot">
        <img class="screen" src="images/array.png" alt="Array Confirmation Screenshot">
    </main>
    <aside>
        <h2>Weekly Class Excercises</h2>
        <h3>Week 2</h3>
        <ol>
            <li><a href="weeks/week2/var.php">var.php</a></li>
            <li><a href="weeks/week2/var2.php">var2.php</a></li>
            <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
            <li><a href="weeks/week2/currency.php">currency.php</a></li>
            <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
        </ol>
        <h3>Week 3</h3>
        <ol>
            <li><a href="weeks/week3/if.php">if.php</a></li>
            <li><a href="weeks/week3/date.php">date.php</a></li>
            <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
            <li><a href="weeks/week3/for-loops.php">for-loops.php</a></li>
            <li><a href="weeks/week3/switch.php">switch.php</a></li>
            <li><a href="weeks/week3/index.php">index.php</a></li>
            <li><a href="weeks/week3/about.php">about.php - not required</a></li>
        </ol>
        <h3>Week 4</h3>
        <ol>
            <li><a href="">example1.php</a></li>
            <li><a href="">example2.php</a></li>
            <li><a href="">example3.php</a></li>
            <li><a href="">example4.php</a></li>
        </ol>
        <h3>Week 5</h3>
        <ol>
            <li><a href="">example1.php</a></li>
            <li><a href="">example2.php</a></li>
            <li><a href="">example3.php</a></li>
            <li><a href="">example4.php</a></li>
        </ol>

    </aside>
</div>
<!-- end wrapper -->
<footer>
    <ul>
        <li>Copyright &copy;
            2024</li>
        <li>All Rights Reserved</li>
        <li>Web Design by Alexandra Ciancimino</li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
    </ul>
    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
</footer>
</body>
</html>