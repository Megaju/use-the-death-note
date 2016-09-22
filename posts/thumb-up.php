<?php


include('../includes/connect_bdd.php');

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('UPDATE deathnote SET note=note+1 WHERE ID='. $_POST['note'] .'');
$req->execute(array($_POST['note']));

header('refresh: 3; url=/deathnote/topofdeath.php');

?>


<h2>Merci d'avoir voté pour cette mort...</h2>
<p>Vous allez être redirigé dans un instant.</p>
<p><i>Si après 3 secondes vous êtes toujours là, actualisez.</i></p>


<style>
    html, body {
        font-family: 'PT Mono', monospace;
        background-color: #000;
        color: #fff;
    }
    
    h2 {
        font-size: 2em;
    }
    
    p {
        font-size: 1em;
    }
    
    i {
        font-size: .8em;
    }
</style>