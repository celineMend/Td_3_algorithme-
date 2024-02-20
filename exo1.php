<?php
function produit_element_tableau($tableau) {
    $produit =1;
    foreach ($tableau as $element ){
        $produit *= $element;
    }
    return $produit;
}
$tableau =array(1,2,3,4,5);
$resultat= produit_element_tableau($tableau);
echo "le produit des éléments du tableau est : " . $resultat;
?>



