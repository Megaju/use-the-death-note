<?php
    // PAGE COURANTE
    $current_page = "index";

    include('includes/header.php'); 
    $firstOfPage = 0;
    $perPage = 6;
?>

<div class="no-flex">
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
   <!-- SITE FR -->
   <a href="deathnote.php" class="button transition">OUVRIR LE DEATHNOTE</a>

    <div class="last-names">
        <h2>Les 6 derniers noms inscrits</h2>
        <?php include('deathnote_names.php'); ?>
    </div>
<?php
    } else {
?>
   <!-- SITE EN -->
   <a href="deathnote.php" class="button">OPEN THE DEATHNOTE</a>

    <div class="last-names">
        <h2>The 6 last names</h2>
        <?php include('deathnote_names.php'); ?>
    </div>    
    
<?php } ?>
</div>
    




<?php include('includes/footer.php'); ?>