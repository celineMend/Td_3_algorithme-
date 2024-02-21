<?php
function calculerMedian($tableau) {
    // Tri du tableau
    sort($tableau);
    
    // Nombre d'éléments dans le tableau
    $nombreElements = count($tableau);
    
    // Calcul de l'indice médian
    $indiceMedian = floor($nombreElements / 2);
    
    // Vérification si le nombre d'éléments est pair ou impair
    if ($nombreElements % 2 == 0) {
        // Si le nombre d'éléments est pair, la médiane est la moyenne des deux éléments du milieu
        $median = ($tableau[$indiceMedian - 1] + $tableau[$indiceMedian]) / 2;
    } else {
        // Si le nombre d'éléments est impair, la médiane est l'élément du milieu
        $median = $tableau[$indiceMedian];
    }
    
    return $median;
}

// Exemple d'utilisation de la fonction
$tableau = array(4, 6, 2, 8, 5);
echo "Le tableau est : " . implode(", ", $tableau) . "<br>";
echo "La médiane est : " . calculerMedian($tableau);
?>
