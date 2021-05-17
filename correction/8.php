<?php

/*
Programme 8
Problème : Veuillez écrire une fonction qui calcule la moyenne des notes d'un individu donc qui :
prend 1 tableau de nombres flottant (liste de notes sur 20) en entrée
retourne la moyenne de ces notes
Votre programme doit comporter au moins 1 boucle foreach utile.
Exemple :
Pour les données suivantes par exemple : [10.0, 15.0, 20.0, 15.0]
La fonction doit retourner : 15.0
*/

// 1. Nom de la fonction : calculerMoyenne
// 2. Type et nom des paramètres en entrée : array $notes
// 3. Type de sortie : float


// function calculerMoyenne(array $notes): float
// {
//     $somme = 0.0;
//     foreach ($notes as $element)
//     {
//         $somme = $somme + $element;
//     }

//     $count = 0;
//     foreach ($notes as $element)
//     {
//         $count = $count + 1;
//     }

//     return $somme / $count;
// }

function calculerMoyenne(array $notes): float
{
    $count = 0;
    $somme = 0.0;
    foreach ($notes as $element)
    {
        $somme = $somme + $element;
        $count = $count + 1;
    }

    return $somme / $count;
}