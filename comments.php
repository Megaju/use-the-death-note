<?php 
    // PAGE COURANTE
    $current_page = "news";

    include('includes/header.php'); 
?>


<div class="no-flex">
<!-- NEWS ET SES COMMENTAIRES -->
<?php
// Récupération du billet
$req = $bdd->prepare('SELECT id, title_fr, title_en, content_fr, content_en, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM news WHERE id = ?');
$req->execute(array($_GET['news_number']));
$donnees = $req->fetch();
?>


<div class="new">
    <h3 class="new-title">
        <?php echo '#' . htmlspecialchars($donnees['id']) . ' ' . ($_SESSION['langue'] == 'fr' ? htmlspecialchars($donnees['title_fr']) : htmlspecialchars($donnees['title_en'])); ?>
        <i class="new-date date-float-r">le <?php echo $donnees['date_creation']; ?></i>
    </h3>
    
    <p class="new-content">
    <?php if($_SESSION['langue'] == 'fr') {
        echo nl2br(htmlspecialchars($donnees['content_fr']));
    } else {
        echo nl2br(htmlspecialchars($donnees['content_en']));
    }
    ?>
    </p>
</div>



<!-- COMMENTAIRES -->
<section class="new">
<h2>Commentaires</h2>
<?php 
    // on prépare la pagination ici
    include('includes/pagination_comments.php');
    $req->closeCursor();
    
    // RECUPERATION DES COMMENTAIRES
    $req = $bdd->prepare('SELECT author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\') AS date_comment FROM comments WHERE id_news = ? ORDER BY date_comment DESC LIMIT ' . $firstOfPage . ',' . $perPage);
    $req->execute(array($_GET['news_number']));
    // boucle pour afficher tout les messages
    while ($donnees = $req->fetch())
    {
?>
    <!-- un bloc commentaire -->
    <div class="comment">
        <p class="user"><strong><?php echo htmlspecialchars($donnees['author']); ?></strong> le <?php echo $donnees['date_comment']; ?></p>
        <p><?php echo nl2br(htmlspecialchars($donnees['comment'])); ?></p>
    </div>
<?php    
    } // Fin de la boucle des commentaires
    $req->closeCursor();
?>



<!-- FORMULAIRE D'ENVOIE DE MESSAGE -->
<form action="posts/post_comment.php" method="post">
    <label for="author">Auteur</label>
    <input type="text" name="author" id="author">
    <label for="comment">Commentaire</label>
    <textarea type="text" name="comment" id="comment" rows="10" cols="30"></textarea>
    <input type="hidden" name="date_comment" id="date_comment" value="<?php echo date("Y-m-d H:i:s"); ?>">
    <input type="hidden" name="id_news" id="id_news" value="<?php echo $_GET['news_number'] ?>">
    <input type="submit">
</form>


<!-- PAGINATION -->
<ul class="pagination">
    <?php
    // precedent
        echo '<li><a href="?news_number=' . $_GET['news_number'] . '&p=' . ($current - 1) . '">' . '&laquo;' . '</a></li>';   
    
    // numeros
        for($i=1; $i<=$nbPage; $i++){
            if($i == $current) {
                echo '<li class="active"><a href="?news_number=' . $_GET['news_number'] . '&p=' . $i . '">' . $i . '</a></li>';
            } else {
                echo '<li><a href="?news_number=' . $_GET['news_number'] . '&p=' . $i . '">' . $i . '</a></li>';
            }
        }
    
    // suivant
        echo '<li><a href="?news_number=' . $_GET['news_number'] . '&p=' . ($current + 1) . '">' . '&raquo;' . '</a></li>';   
    ?>
</ul>

</section>
</div>
<?php include('includes/footer.php'); ?>