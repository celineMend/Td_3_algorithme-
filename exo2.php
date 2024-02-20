<?php
function supprimer_doublons($tableau) {
    // Utilisation de la fonction array_unique pour supprimer les doublons
    $tableau_sans_doublons = array_unique($tableau);
    // Réindexation du tableau pour obtenir des clés numériques séquentielles
    $tableau_sans_doublons = array_values($tableau_sans_doublons);
    return $tableau_sans_doublons;
}

$tableau = array(1, 2, 3, 2, 4, 5, 3);
$tableau_sans_doublons = supprimer_doublons($tableau);
echo "Tableau original : " . implode(", ", $tableau) . "<br>";
echo "Tableau sans doublons : " . implode(", ", $tableau_sans_doublons);
?>