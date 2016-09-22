<?php 
        if ($_POST['mdp'] == 'iamj') {
            ?>
            <?php include('includes/header.php'); ?>
            <form action="posts/post_news.php" method="post">
                <!-- titre fr -->
                <label for="title_fr">Titre FR</label>
                <input type="text" name="title_fr" id="title_fr">
                <!-- titre en -->
                <label for="title_en">Titre EN</label>
                <input type="text" name="title_en" id="title_en">
                <!-- message fr -->
                <label for="content_fr">Message FR</label>
                <textarea type="text" name="content_fr" id="content_fr" rows="10" cols="30"></textarea>
                <!-- message en -->
                <label for="content_en">Message EN</label>
                <textarea type="text" name="content_en" id="content_en" rows="10" cols="30"></textarea>
                <!-- date -->
                <input type="hidden" name="date_creation" id="date_creation" value="<?php echo date(" Y-m-d H:i:s "); ?>">
                <!-- envoyer -->
                <input type="submit">
            </form>
            <style>
                body {
                    background-color: #000;
                }
                
                form {
                    height: 100vh;
                }
            </style>
    <?php    
        } else {
            echo ('<p>Désolé ce n\'est pas le bon mot de passe ton chemin muhahahaha !</p>');
        }
    ?>