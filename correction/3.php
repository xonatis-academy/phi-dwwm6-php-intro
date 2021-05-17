<?php

/*
Problème : Veuillez écrire une fonction qui convertit un nombre de minutes en secondes donc qui :
prend 1 nombre entier en entrée (nombre de minutes)
retourne un nombre entier qui correspond au nombre de secondes équivalent
Exemple :
Pour les données suivantes par exemple : 2
La fonction doit retourner : 120
*/

// 1. Nom de la fonction : convertir
// 2. Type et nom des paramètres en entrée : int $minutes
// 3. Type de sortie : int


function convertir(int $minutes): int
{
    return $minutes * 60;
}

