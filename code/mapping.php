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

// MAPPING ============

$nouvelle_liste = [];
foreach($liste_origine as $article) {
    $article['total'] = $article['quantite'] * $article['prix'];
    array_push($nouvelle_liste, $article);
}

/**
 * 1. On crée une nouvelle liste
 * 2. On déclare une variable pour passer un revue la liste d'orignie
 * 3. On transforme l'élément (dans la variable)
 * 4. On ajoute l'élément dans la nouvelle liste
 */


 // Ecriture alternative (moderne)

$nouvelle_liste = [];
foreach($liste_origine as $article) {
    $article['total'] = $article['quantite'] * $article['prix'];
    $nouvelle_liste[] = $article;
}
