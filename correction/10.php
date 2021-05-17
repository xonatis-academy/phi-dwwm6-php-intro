<?php

/*
Problème : Veuillez écrire une fonction qui récupère le 2eme nombre maximum d'un tableau donc qui :
prend 1 tableau de nombres flottant en entrée
retourne le deuxieme nombre le plus grand s'il y en a, ou null sinon
Exemple :
Pour les données suivantes par exemple : [23.0, 23.0, 2.0, 1.0, 4.0, 5.2, 4.0, 5.2]
La fonction doit retourner : 5.2
*/

// 1. Nom de la fonction : recupererSecondMaximum
// 2. Type et nom des paramètres en entrée : array $nombres
// 3. Type de sortie : ?float

// [18.0, 18.0, 18.0, 18.0]

// [0.0, 0.0, 1.0, 1.5]

function recupererSecondMaximum(array $nombres): ?float
{
    $maximum = $nombres[0];
    $deuxiemeMaximum = null;

    foreach ($nombres as $element)
    {
        if ($element > $maximum)
        {
            $deuxiemeMaximum = $maximum;
            $maximum = $element;
        }
        else
        {
            if ($element > $deuxiemeMaximum && $element < $maximum)
            {
                $deuxiemeMaximum = $element;
            }
        }
    }

    return $deuxiemeMaximum;
}

recupererSecondMaximum([23.0, 23.0, 2.0, 1.0, 4.0, 5.2, 4.0, 5.2]);