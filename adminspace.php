<!-- PANNEAU DE CONNECTION POUR POUVOIR ECRIRE DES NEWS -->
<?php include('includes/header.php'); ?>
    <section class="motdepasse">
    <h2>PAGE PROTÉGÉ PAR MOT DE PASSE</h2>
    <p>Si tu es moi tu connais le mot de passe, sinon merci de passer ton chemin, bye, passe un jour à la maison y a des p'tits gâteaux, des p'tits fours, des p'tits anges tout et d'la vodka tagada. :)</p>
    <!-- demande de mot de passe -->
    <form action="write_news.php" method="POST">
        <input type="password" name="mdp">
        <input type="submit" value="Valider">
    </form>
    </section>
    
    <style>
        .motdepasse {
            margin: 0;
            outline: 0;
            border: 0;
            width: 100%;
            height: 80vh;
            background-color: #000;
            color: #fff;
        }
        
        body {
            overflow-x: hidden;
        }
    </style>
    
<?php include('includes/footer.php'); ?>