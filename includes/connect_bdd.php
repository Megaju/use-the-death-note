 <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=deathnotebdd;charset=utf8', 'root', 'facesimplon');
                //$bdd = new PDO('mysql:host=localhost;dbname=deathnotebdd;charset=utf8', 'root', 'iamj');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
?>