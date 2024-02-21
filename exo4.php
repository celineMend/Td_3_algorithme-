<?php
function compterVoyellesDansTableau($tableau) {
    $nombreVoyellesTotal = 0;

    $voyelles = array('a', 'e', 'i', 'o', 'u', 'y');
    
    foreach ($tableau as $chaine) {
        
        $chaineMinuscule = strtolower($chaine);
        
        // Parcours de chaque caractère de la chaîne
        for ($i = 0; $i < strlen($chaineMinuscule); $i++) {
            // Vérification si le caractère courant est une voyelle
            if (in_array($chaineMinuscule[$i], $voyelles)) {
                // Si c'est le cas, on incrémente le compteur de voyelles
                $nombreVoyellesTotal++;
            }
        }
    }
    
    // Retourner le nombre total de voyelles
    return $nombreVoyellesTotal;
}

// Exemple d'un tableau de chaînes de caractères
$tableau = array("Bonjour", "à", "tous", "!");

// Calcul du nombre de voyelles dans le tableau
$resultat = compterVoyellesDansTableau($tableau);

// Affichage du résultat
echo "Le nombre total de voyelles dans le tableau est : $resultat";
?>
