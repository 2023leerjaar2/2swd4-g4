<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recept met afbeelding</title>
</head>
<body>

<?php
include 'db_connection.php';

$gerechtid = 1; // Vervang dit door het gewenste gerecht-id

$query = "SELECT afbeelding FROM bbq_recepten WHERE gerechtid = $gerechtid";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $afbeeldingPath = $row['afbeelding'];

    // Toon de afbeelding
    if (isset($afbeeldingPath)) {
        echo '<img src="afbeelding/afbeedlingen/bb1.jpg' . $afbeeldingPath . '" alt="Afbeelding">';
    } else {
        echo "Geen afbeelding gevonden voor dit gerecht.";
    }
} else {
    echo "Geen afbeelding gevonden voor dit gerecht.";
}

$conn->close();
?>

</body>
</html>
