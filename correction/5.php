<?php

/*
Problème : Veuillez écrire une fonction qui vérifie si le paiement sans contact est disponible pour un montant donc qui :
prend 1 nombre flottant en entrée (montant à payer)
retourne soit vrai si le paiement sans contact est possible ou bien faux sinon
Le paiement sans contact est disponible si et seulement si le montant à payer est inférieur ou égal à 30 euros.
Exemple :
Pour les données suivantes par exemple : 20.0
La fonction doit retourner : true
*/

// 1. Nom de la fonction : verifier 
// 2. Type et nom des paramètres en entrée : float $montant
// 3. Type de sortie : bool

function verifier(float $montant): bool
{
    if ($montant <= 30.0)
    {
        return true;
    }
    else
    {
        return false;
    }

    /*
    if ($montant <= 30.0)
    {
        return true;
    }
    return false;
    */

    /*
    return ($montant <= 30);
    */
}

