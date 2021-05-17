<?php

/*
Problème : Veuillez écrire une fonction qui cherche la première position d'un nombre dans une liste donc qui :
prend 1 tableau de nombres flottant et un nombre flottant en entrée
retourne la position de ce nombre dans le tableau s'il y est, sinon null
Exemple :
Pour les données suivantes par exemple : [23.0, 2.0, 1.0, 4.0, 5.2, 4.0, 5.2], 4.0
La fonction doit retourner : 4
car la premiere position naturelle de ce nombre est à la 4eme position (et non pas à la 3eme)
*/

// 1. Nom de la fonction : chercher
// 2. Type et nom des paramètres en entrée : array $tab, float $a
// 3. Type de sortie : ?int


// Algorithme :

// index <- 0
// @PourChaque element @Dans tab
// @DebutBloc

    // @Si element = a
    // @DebutBloc
        // @Retourner index + 1
    // @FinBloc

    // index <- index + 1

// @FinBloc
// @Retourner null

// function chercher(array $tab, float $a): ?int
// {
//     // index <- 0
//     $index = 0;

//     // @PourChaque element @Dans tab
//     foreach ($tab as $element)
//     // @DebutBloc
//     {
//         // @Si element = a
//         if ($element == $a)
//         // @DebutBloc
//         {
//             // @Retourner index + 1
//             return $index + 1;
//         // @FinBloc
//         }

//         // index <- index + 1
//         $index = $index + 1;
//     // @FinBloc
//     }

//     // @Retourner null
//     return null;
// }

// function chercher(array $tab, float $a): ?int
// {
//     $index = 0;
//     foreach ($tab as $element)
//     {
//         if ($element == $a)
//         {
//             return $index + 1;
//         }

//         $index = $index + 1;
//     }

//     return null;
// }

// function chercher(array $tab, float $a): ?int
// {
//     $position = 1;
//     foreach ($tab as $element)
//     {
//         if ($element == $a)
//         {
//             return $position;
//         }

//         $position = $position + 1;
//     }

//     return null;
// }

function chercher(array $tab, float $a): ?int
{
    foreach ($tab as $index => $element)
    {
        if ($element == $a)
        {
            return $index + 1;
        }
    }

    return null;
}