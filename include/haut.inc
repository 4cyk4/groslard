<?php 
    define('ROOT','/projet/');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page d'accueil">
    <meta name="author" content="quentin daphnée louis">
    <link rel="icon" href="images/imag.svg" alt="logo">
    <link rel="stylesheet" href="<?= ROOT ?>css/style.css">
    <link rel="stylesheet" href="<?= ROOT ?>css/mobile.css">
    <title>truc</title>
</head>
<body>
    <header>
        <a href="<?= ROOT ?>index.php">
            <img src="<?= ROOT ?>images/image.svg" alt="logo">
        </a>
        <h1>Nom de l'entreprise</h1>
    </header>
    <aside>
        <img src="<?= ROOT ?>images/contact.svg" alt="lien vers l'inscription">
        <a href="<?= ROOT ?>pages/inscription.php">
            <p>Inscription</p>
        </a>
        <p>
            /
        </p>
        <a href="<?= ROOT ?>pages/connexion.php">
            <p>Connexion</p>
        </a>
    </aside>
    <img src="<?= ROOT ?>images/menu.svg" alt="menu deroulant" id="mobile">
    <nav>
        <a href="<?= ROOT ?>index.php"><img src="<?= ROOT ?>images/accueil.svg"></a>
        <a href="<?= ROOT ?>pages/entreprise.php">A Propos de nous</a>
    </nav>
    <aside>
        <form method="get" action="<?= ROOT ?>pages/recherche.php">
            <input type="search" maxlength="150" id="recherche" name="recherche" placeholder="Recherche...">

        </form>
    </aside>