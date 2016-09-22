<?php 
    // PAGE COURANTE
    $current_page = "useit";

    include('includes/header.php'); 
?>


<div class="no-flex">
<!-- I -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>I</h2>

        <ul>
            <li>L'humain dont le nom est écrit dans ce cachier meurt.</li>
            <li>Il faut avoir en tête le visage de la personne dont on écrit le nom, sinon cela ne fonctionnera pas. Par conséquent, on ne peut obtenir un résultat sur les personnes de mêmes nom et prénom en une seule fois.</li>
            <li>À la suite du nom, si l'on écrit la cause de la mort dans un délai de 40 secondes du monde des humains, cela se réalise.</li>
            <li>Si l'on n'écrit pas la cause, la mort est systématiquement due à un arrêt cardiaque.</li>
            <li>Si l'on écrit la cause, on obtient alors un délai supplémentaire de 6 minutes 40 secondes pour décrire précisément le déroulement de la mort.</li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>I</h2>

        <ul>
            <li>The human whose name is written in this note shall die.</li>
            <li>This note will not take effect unless the writer has the person's face in their mind when writing his/her name. Therefore, people sharing the same name will not be affected.</li>
            <li>If the cause of death is written within the next 40 seconds of writing the person's name, it will happen.</li>
            <li>If the cause of death is not specified, the person will simply die of a heart attack.</li>
            <li>After writing the cause of death, details of the death should be written in the next 6 minutes and 40 seconds.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- II -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>II</h2>

        <ul>
            <li>Dès lors que le death note tombe dans le monde des humains, il lui appartient.</li>
            <li>Celui qui s'en saisit devient alors capable de voir et d'entendre le dieu de la Mort qui en est l'ancien propriétaire.</li>
            <li>Celui qui fait usage de ce cahier ne va ni en enfer ni au paradis.</li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>II</h2>

        <ul>
            <li>The note shall become the property of the human world, once it touches the ground of (arrives in) the human world.</li>
            <li>The owner of the note can recognize the image and voice of the original owner, i.e. a god of death .</li>
            <li>The human who uses the notebook can neither go to Heaven nor Hell.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- III -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>III</h2>

        <ul>
            <li>Si l'on écrit l'heure de la mort dans les 40 secondes qui suivent le moment où l'on a écrit "crise cardiaque" comme cause de la mort, on peut fixer l'heure de la mort même pour une crise cardiaque.</li>
            <li>La personne qui touche le death note devient capable de voir et entendre l'ancien propriétaire du cahier le dieu de la Mort, même si elle n'en est pas elle-même le nouveau propriétaire.</li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>III</h2>

        <ul>
            <li>If the time of death is written within 40 seconds after writing the cause of death as a heart attack, the time of death can be manipulated, and the time can go into effect within 40 seconds after writing the name.</li>
            <li>The human who touches the Death Note can recognize the image and voice of its original owner, a god of death, even if the human is not the owner of the note.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- IV -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>IV</h2>

        <ul>
            <li>Le possesseur du cahier garde à ses côtés, jusqu'à sa mort, l'ancien possesseur, un dieu de la Mort, aussi longtemps qu'il détient le death note.</li>
            <li>En général, le dieu de la Mort apparaît devant le nouveau possesseur du death note dans les 39 jours qui suivent le premier jour de l'utilisation.</li>
            <li>Un dieu de la Mort, propriétaire d'origine du death note, en général, ne fait rien qui puisse aider à faire mourir avec le death note.</li>
            <li>Le dieu de la Mort n'a aucune obligation d'expliquer complètement l'utilisation du cahier ou les règles à l'humain qui en a pris possession.
            </li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>IV</h2>

        <ul>
            <li>The person in possession of the Death Note is possessed by a god of death, its original owner, until they die.</li>
            <li>If a human uses the note, a god of death usually appears in front of him/her within 39 days after he/she uses the note.</li>
            <li>Gods of death, the original owners of the Death Note, do not do, in principle, anything which will help or prevent the deaths in the note.</li>
            <li>A god of death has no obligation to completely explain how to use the note or rules which will apply to the human who owns it unless asked.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- V -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>V</h2>

        <ul>
            <li>Un dieu de la Mort peut rallonger sa vie en inscrivant des noms d'humain dans le death note mais un humain, non.</li>
            <li>Une personne peut réduire sa durée de vie en utilisant le death note.</li>
            <li>Une personne qui devient possesseur d'un death note peut obtenir un œil de dieu de la Mort, lui permettant ainsi de connaître le nom de celui ou celle qu'elle regarde, en échange de la moitié de sa vie restante.</li>
            <li>Un dieu de la Mort ne peut être tué, même si on lui tire une balle dans la tête ou si on lui plante un couteau dans le cœur. Il serait possible de tuer un dieu de la Mort, mais en général, les dieux eux-mêmes ignorent comment. Cependant, un dieu de la mort peut mourir en sauvant un humain.</li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>V</h2>

        <ul>
            <li>A god of death can extend their own life by putting a name on their own note, but humans cannot.</li>
            <li>A person can shorten his/her own life by using the note.</li>
            <li>The human who becomes the owner of the Death Note can, in exchange of half his/her remaining life, get the eyeballs of the god of death which will enable him/her to see a human's name and remaining life span when looking through them.</li>
            <li>A god of death cannot be killed even if stabbed in his heart with a knife or shot in the head with a gun. However, there are ways to kill a god of death, which are not generally known to the god of death.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- VI -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>VI</h2>

        <ul>
            <li>Les conditions de la mort décrites dans le death note ne peuvent se réaliser que si elles sont physiquement possible et/ou si elles apparaissent réalisables normalement par un humain.</li>
            <li>Les conditions possibles de la mort ne sont pas écrites par le dieu de la Mort. Il est donc nécessaire de chercher et de trouver par soi-même.</li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>VI</h2>

        <ul>
            <li>The conditions for death will not be realized unless it is physically possible for that human or it is reasonably assumed to be carried out by that human.</li>
            <li>The specific scope of the condition for death is not known to the gods of death, either. So, you must examine and find out.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- VII -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>VII</h2>

        <ul>
            <li>Une page du death note, ou un morceau de page, a les mêmes propriétés que le cahier lui-même.</li>
            <li>Il est possible d'écrire dans le death note avec n'importe quel objet (sang, maquillage, etc.) pourvu que l'on puisse écrire directement avec, que cela soit lisible et que cela ne s'efface pas.</li>
            <li>Même le propriétaire d'origine du death note, un dieu de la Mort, ne sait pas tout du cahier.</li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>VII</h2>

        <ul>
            <li>One page taken from the Death Note, or even a fragment of the page, contains the full effects of the note.</li>
            <li>The instrument to write with can be anything, e.g. cosmetics, blood, etc. as long as it can write directly onto the note and remains as legible letters.</li>
            <li>Even the original owners of Death Note, gods of death, do not know much about the note.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- VIII -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>VIII</h2>

        <ul>
            <li>On peut écrire la cause de la mort ou les circonstances en premier, et écrire le nom par la suite, sur la première ligne, le processus fonctionne quand même. Dans ce cas là, on dispose d'un délai de 19 jours, en temps humain, pour écrire le nom.</li>
            <li>Si une personne, autre que le possesseur du death note, écrit le nom d'une personne sur le cahier et qu'elle connaît son visage, il se produit la même chose que lorsque le possesseur le fait lui-même.</li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>VIII</h2>

        <ul>
            <li>You may also write the cause and/or details of death prior to filling in the name of the individual. Be sure to insert the name in front of the written cause of death. You have about 19 days according to the human calendar in order to fill in a name.</li>
            <li>Even if you do not actually possess the Death Note, the effect will be the same if you can recognize the person and his/her name to place in the blank.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- IX -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>IX</h2>

        <ul>
            <li>Le death note est inefficace sur les êtres qui ont moins de 780 jours.</li>
            <li>Si l'on se trompe quatre fois ou plus en écrivant le nom d'une victime, le death note devient inefficace sur cette personne.</li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>IX</h2>

        <ul>
            <li>The Death Note will not affect those under 780 days old.</li>
            <li>The Death Note will be rendered useless if the victim's name is misspelled four times.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- X -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>X</h2>

        <ul>
            <li>Le suicide est une cause valide de mort. Fondamentalement, c'est une éventualité envisagée par tous les humains et qui, de ce fait, n'entre pas dans les "actes impensables".</li>
            <li>Même si la cause de la mort est le suicide ou l'accident, si la mort de la personne désignée peut entraîner celle d'autres personnes, la personne désignée meurt alors d'une crise cardiaque. Cela a pour but d'éviter qu'il y ait une influence sur d'autres vies.
            </li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>X</h2>

        <ul>
            <li>Suicide is a valid cause of death. Basically, all humans are thought to possess the possibility to commit suicide. It is, therefore, not something unbelievable to think of.</li>
            <li>Whether the cause of the individual's death is either a suicide or accident, if the death leads to the death of more than the intended, the person will simply die of a heart attack. This is to ensure that other lives are not influenced.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- XI -->
<?php
    if($_SESSION['langue'] == 'fr') { 
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>XI</h2>

        <ul>
            <li>Même après avoir écrit le nom, l'heure et les circonstances, il est possible de modifier autant de fois qu'on le souhaite pendant 6 min 40. Bien entendu, pour que le changement soit possible, il ne faut pas que la personne soit déjà morte.</li>
            <li>Lorsque l'on veut faire une correction pendant les 6 min 40 il faut d'abord barrer de deux traits les mots à corriger.</li>
            <li>Comme vous l'avez vu ci-dessus, il est possible de modifier l'heure et les conditions de la mort, mais une fois que le nom est écrit dans le death note, la personne ne peut plus échapper à la mort.</li>
        </ul>
    </section>
<?php
    // ENGLISH
    } else {
?>
    <section class="rules">
        <h2>How to use it</h2>
        <h2>XI</h2>

        <ul>
            <li>Even after the individual's name, the time of death, and death condition on the Death Note were filled out, the time and condition of death can be altered as many times as you want, as long as it is changed within 6 minutes and 40 seconds from the time it was filled in. But, of course, this is only possible before the victim dies.</li>
            <li>Whenever you want to change anything written on the Death Note within 6 minutes and 40 seconds after you wrote, you must first rule out the characters you want to erase with two straight lines.</li>
            <li>As you see above, the time and conditions of death can be changed, but once the victim's name has been written, the individual's death can never be avoided.</li>
        </ul>
    </section>
<?php     
    }
?>

<!-- SUITE POUR PLUS TARD Y EN A TROP... -->
<?php if($_SESSION['langue'] == 'fr'){
    echo 'À suivre...';
} else {
    echo 'To be continued...';
}
?>
</div>
<?php include('includes/footer.php'); ?>