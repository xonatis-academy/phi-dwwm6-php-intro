<?php

/*
Problème : Veuillez écrire une fonction qui trie une liste de tailles (S, M, L et XL) du plus petit au plus grand donc qui :
prend 1 tableau en entrée (liste des tailles S, M, L ou XL)
retourne le tableau trié du plus petit au plus grand
Pour des raisons de performances, cela doit se faire avec 1 boucle foreach maximum.
Exemple :
Pour les données suivantes par exemple : ['M', 'M', 'S', 'XL', 'L', 'XL', 'S', 'M', 'XL', 'S']
La fonction doit retourner : ['S', 'S', 'S', 'M', 'M', 'M', 'L', 'XL', 'XL', 'XL']
*/

// 1. Nom de la fonction : trier
// 2. Type et nom des paramètres en entrée : array $tailles
// 3. Type de sortie : array

// 8947843082430483092840328424093240384938409328403284329480384932040249832409 elements

function trier(array $tailles): array
{
    $compteS = 0;
    $compteM = 0;
    $compteL = 0;
    $compteXL = 0;

    foreach ($tailles as $element)
    {
        if ($element == 'S')
        {
            $compteS = $compteS + 1;
        }
        else if ($element == 'M')
        {
            $compteM = $compteM + 1;
        }
        else if ($element == 'L')
        {
            $compteL = $compteL + 1;
        }
        else if ($element == 'XL')
        {
            $compteXL = $compteXL + 1;
        }
    }

    $resultat = [];
    for ($i = 0; $i < $compteS; ++$i)
    {
        array_push($resultat, 'S');
    }
    for ($i = 0; $i < $compteM; ++$i)
    {
        array_push($resultat, 'M');
    }
    for ($i = 0; $i < $compteL; ++$i)
    {
        array_push($resultat, 'L');
    }
    for ($i = 0; $i < $compteXL; ++$i)
    {
        array_push($resultat, 'XL');
    }

    return $resultat;
}