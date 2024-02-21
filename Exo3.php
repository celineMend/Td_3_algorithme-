<?php
function rotation_droite($tableau, $positions) {
    $n = count($tableau);
    $positions = $positions % $n;
    $temp = array_slice($tableau, -$positions);
    
    for ($i = $n - 1; $i >= $positions; $i--) {
        $tableau[$i] = $tableau[$i - $positions];
    }
    
    
    for ($i = 0; $i < $positions; $i++) {
        $tableau[$i] = $temp[$i];
    }
    
    return $tableau;
}


$tableau = array(1, 2, 3, 4, 5);
$positions = 2;
$resultat = rotation_droite($tableau, $positions);
echo "Tableau original : " . implode(", ", $tableau) . "<br>";
echo "Tableau après rotation de $positions positions à droite : " . implode(", ", $resultat);
?>
