<?php

/*
Problème : Veuillez écrire une fonction qui enlève les doublons d'une liste de nombres entiers donc qui :
prend 1 tableau en entrée
retourne 1 tableau de nombres entier sans les doublons
Exemple :
Pour les données suivantes par exemple : [12, 23, 4, 3, 4, 3, 3, 3, 12, 23, 1, 55]
La fonction doit retourner : [12, 23, 4, 3, 1, 55]
*/

// 1. Nom de la fonction : supprimerDoublons
// 2. Type et nom des paramètres en entrée : array $nombres
// 3. Type de sortie : array

// function supprimerDoublons(array $nombres): array
// {
//     $resultat = [];
//     foreach ($nombres as $element)
//     {
//         if (in_array($element, $resultat))
//         {

//         }
//         else
//         {
//             array_push($resultat, $element);
//         }
//     }
//     return $resultat;
// }

// function supprimerDoublons(array $nombres): array
// {
//     $resultat = [];
//     foreach ($nombres as $element)
//     {
//         if (in_array($element, $resultat) == false)
//         {
//             array_push($resultat, $element);
//         }
//     }
//     return $resultat;
// }


function supprimerDoublons(array $nombres): array
{
    $resultat = [];
    foreach ($nombres as $element)
    {
        if (!in_array($element, $resultat))
        {
            array_push($resultat, $element);
        }
    }
    return $resultat;
}
