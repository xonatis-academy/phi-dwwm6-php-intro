<?php

/*
Problème : Veuillez écrire une fonction qui double un nombre donc qui :
prend 1 nombre flottant en entrée
retourne un nombre flottant qui correspond au double du nombre
Exemple :
Pour les données suivantes par exemple : 4.4
La fonction doit retourner : 8.8
*/

// 1. Nom de la fonction : doubler
// 2. Type et nom des paramètres en entrée : float $nombre
// 3. Type de sortie : float

function doubler(float $nombre): float
{
    return 2 * $nombre;
}
