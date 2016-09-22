<?php
    session_start();
    $_SESSION['langue'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    //$_SESSION['langue'] = 'en';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DEATH NOTE</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<?php // FRENCH
    if($_SESSION['langue'] == 'fr') { 
?>
    <body>
    
    <!-- connection à la bdd -->
    <?php include('connect_bdd.php'); ?>

    <header>
        <h1><a href="index.php">Death note</a></h1>
        <!--<p id="slogan">Ryuk se modernise un peu et a décidé de mettre en ligne un death note virtuel.. il le partage avec nous, pauvres mortels que nous sommes... bonne écriture à tous !</p>-->
        <p id="slogan">Ryuk s'ennuyait comme à son habitude. Il décida alors de créer un Death Note en ligne pour s'amuser un peu. Bonne écriture et réfléchisait bien aux conséquences de vos actes...</p>
            <nav>
                <ul>
                    <li <?php if($current_page=='index'){echo'class="current"';} ?>><a href="index.php" class="transition">couverture</a></li>
                    <li <?php if($current_page=='useit'){echo'class="current"';} ?>><a href="how-to-use-it.php" class="transition">How_to_use_it</a></li>
                    <li <?php if($current_page=='deathnote'){echo'class="current"';} ?>><a href="deathnote.php" class="transition">écrire_un_nom</a></li>
                    <li <?php if($current_page=='top'){echo'class="current"';} ?>><a href="topofdeath.php" class="transition">top_10_des_éxécutions</a></li>
                    <li <?php if($current_page=='news'){echo'class="current"';} ?>><a href="news.php" class="transition">actualités</a></li>
                    <li <?php if($current_page=='apple'){echo'class="current"';} ?>><a href="apple.php" class="transition">pommes</a></li>
                </ul>
            </nav>
    </header>

<?php // ENGLISH
    } else {
?>
    <body>
    
    <!-- connection à la bdd -->
    <?php include('connect_bdd.php'); ?>
    
    <header>
        <h1><a href="index.php">Death note</a></h1>
        <p id="slogan">Ryuk was bored again, so he decided to create a online Death Note to have some fun. Please do think of the consequences before using it...</p>

            <nav>
                <ul>
                    <li><a href="index.php">cover</a></li>
                    <li><a href="how-to-use-it.php">How_to_use_it</a></li>
                    <li><a href="deathnote.php">write_a_name</a></li>
                    <li><a href="news.php">news</a></li>
                    <li><a href="topofdeath.php">top_10_death_sentences</a></li>
                    <li><a href="apple.php">apples</a></li>
                </ul>
            </nav>
    </header>
<?php 
    } 
?>