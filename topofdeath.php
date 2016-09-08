    <?php include('includes/header.php'); ?>
    
    <?php include('includes/pagination.php'); ?>

    <div class="flexbox">
        <section>
           <?php
            if ($_SESSION['langue'] == 'fr') {
                echo '<h2>TOP 10 des éxécutions que VOUS avez choisi</h2>';
            } else {
                echo '<h2>TOP 10 des éxécutions que VOUS avez choisi</h2>';
            }
           ?>
            
            <div id="deathnote-style">
            <?php
            if ($_SESSION['langue'] == 'fr') {
                // Récupération des 50 derniers messages
                $reponse = $bdd->query('SELECT nom, prenom, message, DATE_FORMAT(dateofdeath, \'%d/%m/%Y à %Hh%imin\') AS dateofdeath, top FROM deathnote WHERE note >= 1 ORDER BY ID DESC LIMIT 0, 10');
            } else {
                $reponse = $bdd->query('SELECT nom, prenom, message, DATE_FORMAT(dateofdeath, \'%m/%d/%Y at %Hh%imin\') AS dateofdeath, top FROM deathnote WHERE note >= 1 ORDER BY ID DESC LIMIT 0, 10');
            }
            
            if ($_SESSION['langue'] == 'fr') {
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
            
        </section>

        <aside>
            <!-- image des règles du deathnote avec css -->
        </aside>
    </div>

    <?php include('includes/footer.php'); ?>
</body>

</html>
