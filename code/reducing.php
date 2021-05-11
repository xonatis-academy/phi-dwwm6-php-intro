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

// REDUCING ============

$montant_total_du_panier = 0.0;
foreach($liste_origine as $article) {
    $montant_total_du_panier = $montant_total_du_panier + $article['prix'] * $article['quantite'];
}

