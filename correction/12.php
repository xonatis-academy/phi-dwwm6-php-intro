<?php

/*
Problème : Veuillez écrire une fonction qui trouvent l'écart le plus faible entre 2 ages d'une liste donc qui :
prend 1 tableau en entrée (liste des ages)
retourne un nombre entier qui correspond à l'écart le plus faible
Exemple :
Pour les données suivantes par exemple : [12, 14, 23, 92, 45, 11, 43, 55]
La fonction doit retourner : 1
car l'écart le plus faible est entre 12 et 11 et c'est écart est de 1 an
*/

// 1. Nom de la fonction : trouverEcartMinimum
// 2. Type et nom des paramètres en entrée : array $ages
// 3. Type de sortie : int

function trouverEcartMinimum(array $ages): int
{
    $ecartMinimum = $ages[1] - $ages[0];
    if ($ecartMinimum < 0)
    {
        $ecartMinimum = $ages[0] - $ages[1];
    }

    foreach ($ages as $i => $age)
    {
        foreach ($ages as $j => $element)
        {
            if ($i < $j)
            {
                $ecart = $age - $element;
                if ($ecart < 0)
                {
                    $ecart = $element - $age;
                }
    
                if ($ecart < $ecartMinimum)
                {
                    $ecartMinimum = $ecart;
                }
            }            
        }
    }

    return $ecartMinimum;
}

trouverEcartMinimum([12, 14, 23, 92, 45, 11, 43, 55]);