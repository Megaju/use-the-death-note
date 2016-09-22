<?php include('includes/header.php'); ?>
<div class="no-flex">
<!-- Listes des 6 dernières nouvelles -->
<?php
            
            include('includes/pagination_new.php');

            // Récupération des 6 dernières news
            $reponse = $bdd->query('SELECT id, title_fr, title_en, content_fr, content_en, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation FROM news ORDER BY ID DESC LIMIT ' . $firstOfPage . ',' . $perPage);

            // Affichage des messages
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
            
            <!-- PAGINATION -->
            <ul class="pagination">
                <!-- precedent -->
                <?php
                    echo '<li><a href="?p=' . ($current - 1) . '">' . '&laquo;' . '</a></li>';   
                ?>
                <!-- numeros -->
                <?php
                    for($i=1; $i<=$nbPage; $i++){
                        if($i == $current) {
                            echo '<li class="active"><a href="?p=' . $i . '">' . $i . '</a></li>';
                        } else {
                            echo '<li><a href="?p=' . $i . '">' . $i . '</a></li>';
                        }
                    }
                ?>
                <!-- suivant -->
                <?php
                    echo '<li><a href="?p=' . ($current + 1) . '">' . '&raquo;' . '</a></li>';   
                ?>
            </ul>
</div>
<?php include('includes/footer.php'); ?>