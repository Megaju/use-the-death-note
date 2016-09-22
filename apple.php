<?php 
    // PAGE COURANTE
    $current_page = "apple";

    include('includes/header.php');
?>

<div class="no-flex">

    <p class="count-apple">POMMES ACTUELLEMENT DONNÉES</p>
    <p class="count-apple apple">
    <?php
        //on récupère le nombre de pomme dans la bdd
        $a = $bdd->query('SELECT apples FROM appleforryuk LIMIT 0, 1');
            
            while ($donnees = $a->fetch())
            {
                echo $donnees['apples'];
            }
    ?>
    </p>

    <a href="posts/give_an_apple.php" class="button give-an-apple transition-6s">DONNER UNE POMME À RYUK !</a>

</div>

<?php include('includes/footer.php'); ?>