<h1>Chrono en PHP</h1>

<?php
setlocale(LC_ALL, 'fr_FR');

echo 'Nous sommes le '. strftime('<strong>%d %B %Y</strong>, et il est <strong>%Hh%M</strong>') .'.<br />'

?>


<?php
$annee = date('Y');
$noel = mktime(8, 0, 0, 12, 25, $annee); // Le timestamp du 25 décembre de l'année actuelle à 8h00.

// pour empêcher d'avoir un compteur en négatif si la date est passée...
if ($noel < time())
 $noel = mktime(8, 0, 0, 12, 25, ++$annee);

// Différence entre Noël et maintenant.
$tps_restant = $noel - time(); 
?>

<?php
    // CONVERSION DU TEMPS PCK LES SECONDES C'EST SYMPA MAIS...
    $i_rest = $tps_restant / 60; // Minutes restantes
    $H_rest = $i_rest / 60; // Heures restantes
    $d_rest = $H_rest / 24; // Jours restants

    $s_rest = floor($tps_restant % 60); // Secondes restantes
    $i_rest = floor($i_rest % 60); // Minutes restantes
    $H_rest = floor($H_rest % 24); // Heures restantes
    $d_rest = floor($d_rest); // Jours restants


    echo 'Il reste ' . $d_rest . ' jours ' . $H_rest . ' heures ' . $i_rest . ' minutes et ' . $s_rest . ' secondes avant Noël !';
?>


<?php
/* EXPLICATION DU MKTIME
*  mktime(hour,minute,second,month,day,year,is_dst);
*  tout est OPTIONEL là dedans, c'est cool.
*  is_dst J'AI PAS ENCORE COMPRIS A VOIR PLUS TARD, MAIS POUR LE MOMENT, PAS BESOIN.
*  revoir le cours : https://openclassrooms.com/courses/un-compte-a-rebours-en-php
*/
?>

