<?php

$liste_origine = [
    [
        "produit" => 12,
        "quantite" => 3,
        "prix" => 12.0
    ],
    [
        "produit" => 9,
        "quantite" => 2,
        "prix" => 5.0
    ],
    [
        "produit" => 5,
        "quantite" => 1,
        "prix" => 15.0
    ]
];

// FILTERING ============

$nouvelle_liste = [];
foreach($liste_origine as $article) {
    if ($article['prix'] > 7.0) {
        array_push($nouvelle_liste, $article);
    }
}

/**
 * 1. On crée une nouvelle liste
 * 2. On déclare une variable pour passer en revue la liste d'origine
 * 3. On filtre en écrivant une condition
 * 4. Si la condition est satisfaite, on ajoute l'élément dans la nouvelle liste
 */


 // Ecriture alternative (moderne)

 $nouvelle_liste = [];
 foreach($liste_origine as $article) {
     if ($article['prix'] > 7.0) {
         $nouvelle_liste[] = $article;
     }
 }
