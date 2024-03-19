<?php 

    include "../include/haut.inc";

    $masse = $_POST["masse"];
    $taille = $_POST["taille"];

    $imc = $masse / ($taille * $taille);

    if ($imc < 18.5) {
        echo "Votre IMC est de $imc, vous êtes en insuffisance pondérale";
    } elseif ($imc >= 18.5 && $imc < 25) {
        echo "Votre IMC est de $imc, vous avez un poids normal";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "Votre IMC est de $imc, vous êtes en surpoids";
    } elseif ($imc >= 30 && $imc < 35) {
        echo "Votre IMC est de $imc, vous êtes en obésité modérée";
    } elseif ($imc >= 35 && $imc < 40) {
        echo "Votre IMC est de $imc, vous êtes en obésité sévère";
    } else {
        echo "Votre IMC est de $imc, vous êtes en obésité morbide";
    }

    include "../include/bas.inc";


?>