
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
</html>