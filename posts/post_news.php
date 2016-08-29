<?php
    include('../includes/connect_bdd.php');
$req = $bdd->prepare('INSERT INTO news (title_fr, title_en, content_fr, content_en, date_creation) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['title_fr'], $_POST['title_en'], $_POST['content_fr'], $_POST['content_en'], $_POST['date_creation']));
header('Location: /deathnote/news.php');
?>