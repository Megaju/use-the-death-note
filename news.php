<?php include('includes/header.php'); ?>

<!-- Listes des 6 dernières nouvelles -->
<?php
            // Récupération des 6 dernières news
            $reponse = $bdd->query('SELECT id, title_fr, title_en, content_fr, content_en, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation FROM news ORDER BY id DESC LIMIT 0, 6');

            // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
            while ($donnees = $reponse->fetch())
            {   
                echo '<div class="new">' .
                    '<h3 class="new-title">' .
                    '#' . htmlspecialchars($donnees['id']) . ' ' .
                        ($_SESSION['langue'] == 'fr' ? htmlspecialchars($donnees['title_fr']) : htmlspecialchars($donnees['title_en']))  .
                    '</h3>' .
                    '<i class="new-date">Le ' .
                        htmlspecialchars($donnees['date_creation']) . 
                    '</i>' .
                    '<p class="new-content">' .
                        ($_SESSION['langue'] == 'fr' ? htmlspecialchars($donnees['content_fr']) : htmlspecialchars($donnees['content_en']))  .
                    '</p>' .
                    '<a href="' . 'comments.php?news_number=' . htmlspecialchars($donnees['id']) .  '">Commentaires</a>' .
                    '</div>';
            }

            $reponse->closeCursor();

            ?>

<?php include('includes/footer.php'); ?>