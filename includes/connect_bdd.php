 <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=DB_DEATHNOTE;charset=utf8', 'root', 'facesimplon');
        //$bdd = new PDO('mysql:host=localhost;dbname=DB_DEATHNOTE;charset=utf8', 'root', 'iamj');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
?>