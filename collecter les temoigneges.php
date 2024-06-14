<?php
// Connexion à MongoDB
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");


// Créer un document
$document = [
    'nom' => 'Charlie',
    'email' => 'charlie@example.com',
    'message' => 'Encore un autre témoignage.',
    'date' => new MongoDB\BSON\UTCDateTime((new DateTime())->getTimestamp()*1000)
];

// Préparer une écriture
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert($document);

// Exécuter l'écriture
$result = $manager->executeBulkWrite('temoignages_db.temoignages', $bulk);

echo "Témoignage inséré avec succès.\n";
?>
