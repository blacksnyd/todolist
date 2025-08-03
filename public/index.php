
<?php
// Tableau contenant la liste de courses
// Chaque élément est un tableau associatif avec :
// - "nom" : le nom de l'article
// - "priorite" : niveau d'importance (1 = haute, 2 = moyenne, 3 = basse)
$liste = [
    ["nom" => "Pain", "priorite" => 1],
    ["nom" => "Lait", "priorite" => 2],
    ["nom" => "Tomates", "priorite" => 3],
    ["nom" => "Pâtes", "priorite" => 2],
];

// On inverse l'ordre du tableau pour que
// le plus récent apparaisse en haut de la liste
$liste = array_reverse($liste);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de courses</title>

    <!-- On lie le fichier CSS externe -->
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body>
    <?php

   include '../includes/header.php';
    ?>
    <!-- Titre de la page -->
    <h2>🛒 Liste de courses</h2>

    <!-- Liste HTML sans puces -->
    <ul class="liste-courses">
        <?php 
        // On parcourt chaque élément du tableau $liste
        foreach ($liste as $item): 
        ?>
            <!-- 
                On donne une classe "priorite-X" à chaque élément 
                en fonction de son niveau de priorité 
            -->
            <li class="priorite-<?php echo $item['priorite']; ?>">
                <!-- On affiche le nom de l'article, en le protégeant avec htmlspecialchars -->
                <?php echo htmlspecialchars($item['nom']); ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
=======
// ===================================
// DÉFINITION DU TABLEAU DES COURSES
// ===================================
// On crée une variable nommée $listesCourses.
// Cette variable contient un tableau (array) principal.
// Ce tableau regroupe plusieurs "listes de courses", sous forme de tableaux associatifs (clé => valeur).

$listesCourses = [
    [
        //    listes de courses
        "titre" => "Courses maison",        // Le titre de la liste
        "priorite" => 1,                    // Priorité haute 
        "articles" => [                     // Liste des articles 
            "Pain",
            "Lait",
            "Tomates",
            "Pâtes",
            "Riz",
            "Pomme"
        ]
    ],
    [

        "titre" => "Courses barbecue",
        "priorite" => 2,                    // Priorité moyenne
        "articles" => [
            "Viande",
            "Charbon",
            "Sauce barbecue",
            "Salade",
            "Bière"
        ]
    ],
    [

        "titre" => "Courses pique-nique",
        "priorite" => 3,                    // Priorité faible 
        "articles" => [
            "Sandwichs",
            "Chips",
            "Jus de fruits",
            "Serviettes"
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes de courses</title>
    <link rel="stylesheet" href="../asset/css/style.css">
</head>

<body>

    <?php
    // =====================================
    // BOUCLE PHP POUR AFFICHER CHAQUE LISTE
    // =====================================
    // On parcourt le tableau $listesCourses avec une boucle foreach.
    // À chaque tour de boucle, la variable $liste contient UNE des 3 listes définies plus haut.

    foreach ($listesCourses as $liste): ?>

        <!-- Chaque liste est affichée dans une balise <section> -->
        <!-- On attribue dynamiquement une classe CSS basée sur la priorité -->
        <!-- Exemple : <section class="priorite-1"> ou priorite-2, etc. -->
        <section class="priorite-<?php echo $liste['priorite']; ?>">

            <!-- Titre de la liste (ex: "Courses maison") -->
            <!-- htmlspecialchars() empêche qu’un code HTML ou JavaScript soit injecté -->
            <h2><?php echo htmlspecialchars(trim($liste['titre'])); ?> 🛒</h2>

            <!-- On crée une liste HTML <ul> qui contiendra tous les articles -->
            <ul class="liste-courses">

                <?php
                // =============================
                // BOUCLE POUR LES ARTICLES
                // =============================
                // On parcourt chaque élément du tableau d'articles avec une autre boucle foreach.
                // $article contiendra à chaque tour un nom d’article (ex: "Pain", "Viande", etc.)
                foreach ($liste['articles'] as $article): ?>

                    <!-- On affiche chaque article dans une balise <li> (élément de liste) -->
                    <!-- Encore une fois, on protège avec htmlspecialchars() pour éviter les caractères spéciaux non sécurisés -->
                    <li><?php echo htmlspecialchars(trim($article)); ?></li>

                <?php endforeach; ?>
            </ul>

        </section>

    <?php endforeach; ?>

</body>

</html>