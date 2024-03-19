<?php 
    include "../include/haut.inc";
?>
<main>
    <h2>Fiche d'inscription</h2>
    <form method="post" action="<?= ROOT ?>pages/co.php">
        <input type="email" id="email" name="email" placeholder="Votre email" maxlength="100">
        <br>
        <input type="password" id="testmpd" name="testmdp" placeholder="Votre mot de passe" maxlength="50" minlength="5">
        <br>
        <input type="submit">
    </form>
</main>
<?php 
    include "../include/bas.inc";
?>