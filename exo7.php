<?php
// Tableau de chaînes de caractères
$tableau = array("Bonjour", "à", "tous", "!");

// Initialisation de la nouvelle chaîne
$nouvelleChaine = "";

// Parcours du tableau et concaténation des éléments
foreach ($tableau as $element) {
    $nouvelleChaine .= $element;
}

// Affichage de la nouvelle chaîne
echo $nouvelleChaine;
?>
