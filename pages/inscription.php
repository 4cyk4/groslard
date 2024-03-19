<?php 
    include "../include/haut.inc";
?>
<main>
    <h2>Fiche d'inscription</h2>
    <form method="post" action="<?= ROOT ?>pages/traitement.php">
        <input type="text" id="nom" name="nom" placeholder="Votre nom" maxlength="150">
        <br>
        <input type="text" id="prenom" name="prenom" placeholder="Votre prenom" maxlength="150">
        <br>
        <input type="text" id="age" name="age" placeholder="Votre âge" maxlength="3" minlength="2">
        <br>
        <input type="email" id="mail" name="mail" placeholder="Votre email" maxlength="100">
        <br>
        <input type="text" id="adresse" name="adresse" placeholder="Votre adresse" maxlength="150" minlength="5">
        <br>
        <input type="text" id="ville" name="ville" placeholder="Votre ville" maxlength="150" minlength="1">
        <br>
        <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" maxlength="50" minlength="5">
        <br>
        <input type="password" id="confmdp" name="confmdp" placeholder="Vérification du mot de passe" maxlength="50" minlength="5">
        <br>
        <input type="submit">
    </form>
</main>
<?php 
    include "../include/bas.inc";
?>