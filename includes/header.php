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
        <p id="slogan">Ryuk s'ennuyait un peu... il décida de créer un Death Note en ligne pour s'amuser un peu. Bonne écriture et réfléchisait bien aux conséquences de vos actes...</p>
            <nav>
                <ul>
                    <li><a href="index.php">couverture</a></li>
                    <li><a href="how-to-use-it.php">How_to_use_it</a></li>
                    <li><a href="deathnote.php">écrire_un_nom</a></li>
                    <li><a href="news.php">actualités</a></li>
                    <li><a href="topofdeath.php">top_10_des_éxécutions</a></li>
                    <li><a href="apple.php">pommes</a></li>
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