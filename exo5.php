<?php
function trouver_elements_communs($tableau1, $tableau2) {
    // Utilisation de la fonction array_intersect pour trouver les éléments communs
    $elements_communs = array_intersect($tableau1, $tableau2);
    return $elements_communs;
}

// Exemple d'utilisation
$tableau1 = array(1, 2, 3, 4, 5);
$tableau2 = array(3, 4, 5, 6, 7);
$communs = trouver_elements_communs($tableau1, $tableau2);
echo "Éléments communs aux tableaux : " . implode(", ", $communs);
?>
