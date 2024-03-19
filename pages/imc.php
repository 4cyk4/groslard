<?php 
    include "../include/haut.inc";
?>
<main>
    <h1>
        Caclculez gratuitement votre IMC grâce à notre outil en ligne
    </h1>
    <form method="post" action="<?= ROOT ?>pages/traitement_imc.php">
        <input type="text" id="masse" name="masse" placeholder="Votre masse" maxlength="3" minlength="2">
        <br>
        <input type="text" id="taille" name="taille" placeholder="Votre taille" maxlength="3" minlength="2">
        <br>
        <input type="submit">
</main>
<?php 
    include "../include/bas.inc";
?>