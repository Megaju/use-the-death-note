<?php


include('../includes/connect_bdd.php');

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('UPDATE deathnote SET note=note-1 WHERE ID='. $_POST['note'] .'');
$req->execute(array($_POST['note']));

// Redirection du visiteur vers la page du minichat
header('Location: /deathnote/thanks.php');


?>
