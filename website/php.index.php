<?php
$servername = "localost";
$username = "root";
$dbname = "bbq";

// Maak verbinding met de database
$conn = new mysli($localhost, $root, $bbq);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

echo "Verbinding met de database is succesvol.";

// Voer hier je SQL-query's uit of andere databasebewerkingen uit.

// Sluit de databaseverbinding wanneer je klaar bent
$conn->close();
?>
