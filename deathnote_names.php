<?php
            if($_SESSION['langue'] == 'fr') {
                // Récupération des 50 derniers messages
                $reponse = $bdd->query('SELECT ID, nom, prenom, message, DATE_FORMAT(dateofdeath, \'%d/%m/%Y à %Hh%imin\') AS dateofdeath FROM deathnote ORDER BY ID DESC LIMIT ' . $firstOfPage . ',' . $perPage);
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