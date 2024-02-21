<?php
function elements_sans_doublons($tableau) {
    // Utilisation de la fonction array_count_values pour compter le nombre d'occurrences de chaque élément
    $occurrences = array_count_values($tableau);
    $elements_sans_doublons = array();
    
    // Parcours des occurrences pour trouver les éléments sans doublons
    foreach ($occurrences as $element => $count) {
        if ($count === 1) {
            $elements_sans_doublons[] = $element;
        }
    }
    
    return $elements_sans_doublons;
}

// Exemple d'utilisation
$tableau = array(1, 2, 3, 2, 4, 5, 3);
$resultat = elements_sans_doublons($tableau);
echo "Éléments sans doublons : " . implode(", ", $resultat);
?>
