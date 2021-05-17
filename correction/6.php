<?php

/*
Problème : Veuillez écrire une fonction qui compte le nombre de personnes majeurs dans une liste donc qui :
prend 1 tableau d'ages en entrée
retourne le nombre total de personnes majeures
Exemple :
Pour les données suivantes par exemple : [15, 12, 18, 19, 43, 13, 16, 53]
La fonction doit retourner : 4
car il y a 4 personnes dont l'age dépasse l'age requis pour etre majeur
*/

// 1. Nom de la fonction : compter
// 2. Type et nom des paramètres en entrée : array $ages
// 3. Type de sortie : int


function compter(array $ages): int
{
    $main = 0;

    foreach ($ages as $element)
    {
        if ($element >= 18)
        {
            $main = $main + 1;
        }
    }

    return $main;
}
