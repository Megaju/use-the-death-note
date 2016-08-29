    <?php include('includes/header.php'); ?>
    
    <?php include('includes/pagination.php'); ?>

    <div class="flexbox">
        <section>
            <h2>TOP des éxécutions que VOUS avez choisi</h2>
            
            <div id="deathnote-style">
            <?php
            // Récupération des 50 derniers messages
            $reponse = $bdd->query('SELECT nom, prenom, message, DATE_FORMAT(dateofdeath, \'%d/%m/%Y à %Hh%imin et %ss\') AS dateofdeath, top FROM deathnote WHERE top = 1 ORDER BY ID DESC LIMIT ' . $firstOfPage . ',' . $perPage);

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
            
        </section>

        <aside>
            <!-- image des règles du deathnote avec css -->
        </aside>
    </div>

    <?php include('includes/footer.php'); ?>
</body>

</html>