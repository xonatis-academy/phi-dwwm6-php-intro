<?php

/*
Problème : Veuillez écrire une fonction qui applique une réduction de 20 % à un prix donc qui :
prend 1 nombre flottant en entrée (prix d'origine)
retourne un nombre flottant qui correspond prix moins 20 %
Exemple :
Pour les données suivantes par exemple : 20.0
La fonction doit retourner : 16.0
*/

// 1. Nom de la fonction : reduire
// 2. Type et nom des paramètres en entrée : float $prix
// 3. Type de sortie : float

function reduire(float $prix): float
{
    return $prix * 0.80;
    // return $prix - $prix * 0.20;
    // return $prix * (1.0 - 0.20);
    // return $prix - $prix * 20.0 / 100.0;
}

