<?php
// Connexion à MongoDB
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

// Créer une requête pour récupérer tous les témoignages
$query = new MongoDB\Driver\Query([]);

// Exécuter la requête sur la collection 'temoignages' de la base de données 'temoignages_db'
$cursor = $manager->executeQuery('temoignages_db.temoignages', $query);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Témoignages</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .temoignage { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; }
        .temoignage h2 { margin-top: 0; }
    </style>
</head>
<body>
    <h1>Liste des Témoignages</h1>

    <?php
    // Parcourir les résultats et afficher chaque témoignage
    foreach ($cursor as $document) {
        echo '<div class="temoignage">';
        echo '<h2>' . htmlspecialchars($document->nom, ENT_QUOTES, 'UTF-8') . '</h2>';
        echo '<p><strong>Email:</strong> ' . htmlspecialchars($document->email, ENT_QUOTES, 'UTF-8') . '</p>';
        echo '<p><strong>Message:</strong> ' . htmlspecialchars($document->message, ENT_QUOTES, 'UTF-8') . '</p>';
        echo '<p><strong>Date:</strong> ' . htmlspecialchars($document->date->toDateTime()->format('Y-m-d H:i:s'), ENT_QUOTES, 'UTF-8') . '</p>';
        echo '</div>';
    }
    ?>

</body>
</html>
