<?php include('includes/header.php'); ?>

<?php
    if($_SESSION['langue'] == 'fr') { 
?>
   <!-- SITE FR -->
   <a href="deathnote.php" class="button">OUVRIR LE DEATHNOTE</a>

    <div class="last-names">
        <h2>Les 6 derniers noms inscrits</h2>

        <?php
                // Récupération des 6 derniers messages
                $reponse = $bdd->query('SELECT nom, prenom, message, dateofdeath FROM deathnote ORDER BY ID DESC LIMIT 0, 6');

                // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
                while ($donnees = $reponse->fetch())
                    {
                        echo '<p class="death"> - ' . '<span class="name">' .
                    htmlspecialchars($donnees['prenom']) .
                    ' ' .
                    htmlspecialchars($donnees['nom']) . '</span>' .
                    ' <strong>Cause :</strong> ' . 
                    htmlspecialchars($donnees['message']) . 
                    ' le ' . 
                    htmlspecialchars($donnees['dateofdeath']) . 
                    '</p>';
                    }

                $reponse->closeCursor();

        ?>
    </div>
<?php
    } else {
?>
   <!-- SITE EN -->
   <a href="deathnote.php" class="button">OPEN THE DEATHNOTE</a>

    <div class="last-names">
        <h2>The 6 last names</h2>

        <?php
                // Récupération des 6 derniers messages
                $reponse = $bdd->query('SELECT nom, prenom, message, dateofdeath FROM deathnote ORDER BY ID DESC LIMIT 0, 6');

                // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
                while ($donnees = $reponse->fetch())
                    {
                        echo '<p class="death"> - ' . '<span class="name">' .
                    htmlspecialchars($donnees['prenom']) .
                    ' ' .
                    htmlspecialchars($donnees['nom']) . '</span>' .
                    ' <strong>Cause :</strong> ' . 
                    htmlspecialchars($donnees['message']) . 
                    ' the ' . 
                    htmlspecialchars($donnees['dateofdeath']) . 
                    '</p>';
                    }

                $reponse->closeCursor();

        ?>
    </div>    
    
<?php } ?>
    




<?php include('includes/footer.php'); ?>