<?php include('includes/header.php'); ?>

<?php
    if($_SESSION['langue'] == 'fr') { 
?>
   <!-- SITE FR -->
   <a href="deathnote.php" class="button">OUVRIR LE DEATHNOTE</a>

    <div class="last-names">
        <h2>Les 6 derniers noms inscrits</h2>

        <?php
            if($_SESSION['langue'] == 'fr') {
                // Récupération des 50 derniers messages
                $reponse = $bdd->query('SELECT ID, nom, prenom, message, DATE_FORMAT(dateofdeath, \'%d/%m/%Y à %Hh%imin\') AS dateofdeath FROM deathnote ORDER BY ID DESC LIMIT 0, 6');
            } else {
                // Récupération des 50 derniers messages
                $reponse = $bdd->query('SELECT ID, nom, prenom, message, DATE_FORMAT(dateofdeath, \'%m/%d/%Y at %Hh%imin\') AS dateofdeath FROM deathnote ORDER BY ID DESC LIMIT ' . $firstOfPage . ',' . $perPage);
            }

            if ($_SESSION['langue'] == 'fr') {
                // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
                while ($donnees = $reponse->fetch())
                {
                    echo '<p class="death"><form action="posts/thumb-up.php" method="post" class="thumbs"><input type="hidden" name="note" id="note" value="' . $donnees['ID'] . '" class="fa fa-thumbs-up"><input type="submit" value="+1" class="thumb-up"></form><form action="posts/thumb-down.php" method="post" class="thumbs"><input type="hidden" name="note" id="note" value="' . $donnees['ID'] . '"><input type="submit" value="-1" class="thumb-down"></form> - ' . '<span class="name">' .
                    htmlspecialchars($donnees['prenom']) .
                    ' ' .
                    htmlspecialchars($donnees['nom']) . '</span>' .
                    ' <strong>Cause :</strong> ' . 
                    htmlspecialchars($donnees['message']) . 
                    ' le ' . 
                    htmlspecialchars($donnees['dateofdeath']) . 
                    '</p>';
                }
            } else {
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