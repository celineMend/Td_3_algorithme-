<?php
function calculerFrequences($chaine) {
    // Initialisation du tableau de fréquences
    $frequences = array();
    
    // Parcours de la chaîne caractère par caractère
    for ($i = 0; $i < strlen($chaine); $i++) {
        // Récupération du caractère courant
        $caractere = $chaine[$i];
        
        // Vérification si le caractère existe déjà dans le tableau de fréquences
        if (isset($frequences[$caractere])) {
            // Si le caractère existe, on incrémente sa fréquence
            $frequences[$caractere]++;
        } else {
            // Sinon, on initialise sa fréquence à 1
            $frequences[$caractere] = 1;
        }
    }
    
    // Retourner le tableau de fréquences
    return $frequences;
}

// Chaîne de caractères à analyser
$chaine = "Bonjour tout le monde";

// Calcul des fréquences des caractères dans la chaîne
$resultat = calculerFrequences($chaine);

// Affichage des résultats
echo "Fréquences des caractères dans la chaîne '$chaine':<br>";
foreach ($resultat as $caractere => $frequence) {
    echo "'$caractere' : $frequence<br>";
}
?>
