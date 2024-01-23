<?php

// wine list 

echo '<h2>This will be my wine list</h2>';

$wines = array (
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);

foreach($wines as $key) {
    echo '<ul>';
    echo '<li> '.$key.' </li>';
    echo '</ul>';
}

echo '<br>';

// movies

echo '<h2>Movies and Shoes list will have both a key and a value</h2>';

$films = [
    'Hulu' => 'The Kardashians',
    'Netflix' => 'Leave The World Behind',
    'HBO' => 'Sopranos',
    'HBO' => 'Westworld'
];

foreach($films as $key => $value) {
    echo '<ul>';
    echo '<li> <b>'.$key.'</b>: '.$value.'</li>';
    echo '</ul>';
}

echo '<br>';

// films with the same platform PLAY GROUND TO FIGURE OUT HOW TO SHOW MULTIPLE KEYS WITH DIFFERENT VALUES

echo '<h2>Movies and Shoes list will have both a key and a value (using count)</h2>';

$films = [
    'Hulu' => ['The Kardashians'],
    'Netflix' => ['Leave The World Behind'],
    'HBO' => ['Sopranos', 'Westworld', 'Sex and the City']
];

foreach ($films as $key => $movies) {
    echo '<ul>';
    echo '<li><b>'.$key.'</b>: ';
    
    $moviesCount = count($movies);
    foreach ($movies as $index => $movie) {
        echo $movie;
        if ($moviesCount > 1 && $index < $moviesCount - 1) {
            echo ', ';
        }
    }
    
    echo '</li>';
    echo '</ul>';
}

echo '<br>';

// films with the same platform PLAY GROUND TO FIGURE OUT HOW TO SHOW MULTIPLE KEYS WITH DIFFERENT VALUES

echo '<h2>Movies and Shoes list will have both a key and a value (using implode)</h2>';

$films = [
    'Hulu' => ['The Kardashians'],
    'Netflix' => ['Leave The World Behind'],
    'HBO' => ['Sopranos', 'Westworld', 'Sex and the City']
];

foreach($films as $key => $movies) {
    echo '<ul>';
    echo '<li> <b>'.$key.'</b>: '.implode(', ', $movies).'</li>';
    echo '</ul>';
}

echo '<br>';

// films with the same platform PLAY GROUND TO FIGURE OUT HOW TO SHOW MULTIPLE KEYS WITH DIFFERENT VALUES

echo '<h2>Movies and Shoes list will have both a key and a value (foreach x2)</h2>';

$films = [
    'Hulu' => ['The Kardashians'],
    'Netflix' => ['Leave The World Behind'],
    'HBO' => ['Sopranos', 'Westworld', 'Sex and the City']
];

foreach ($films as $key => $movies) {
    echo '<ul>';
    foreach ($movies as $movie) {
        echo '<li><b>'.$key.'</b> - '.$movie.'</li>';
        echo '<br>';
    }
    echo '</ul>';
}

echo '<br>';

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
