<?php
    session_start();
    $_SESSION['langue'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    //$_SESSION['langue'] = 'en';
?>

<?php
    if($_SESSION['langue'] == 'fr') {
?>
        <footer>
            (c)DEATHNOTE, 2016. par J
        </footer>
<?php
    // ENGLISH
    } else {
?>
        <footer>
            (c)DEATHNOTE, 2016. by J
        </footer>
<?php
    }
?>