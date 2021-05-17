<?php

/*
Problème : Veuillez écrire une fonction qui échange les 2 derniers nombres d'un tableau donc qui :
prend 1 tableau de nombres entier en entrée
retourne 1 tableau avec les 2 derniers éléments échangés
Exemple :
Pour les données suivantes par exemple : [34, 56, 43, 2, -1, 34, 22]
La fonction doit retourner : [34, 56, 43, 2, -1, 22, 34]
*/

// 1. Nom de la fonction : echanger
// 2. Type et nom des paramètres en entrée : array $donnees
// 3. Type de sortie : array

function echanger(array $donnees): array
{
    $copie = $donnees;

    $dernierIndex = count($donnees) -1;
    $copie[$dernierIndex] = $donnees[$dernierIndex -1];
    $copie[$dernierIndex -1] = $donnees[$dernierIndex];

    return $copie;
}
