<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_connection.php';

if (isset($_GET['gerechtid'])) {
    $gerechtid = $_GET['gerechtid'];

    $query = "SELECT afbeelding FROM bbq_recepten WHERE gerechtid = $gerechtid";
    $result = $conn->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $afbeelding = $row['afbeelding'];

            // Stel het juiste MIME-type in op basis van het afbeeldingsbestand
            header('Content-Type: afbeeldingen/bbq1.jpg'); // Pas dit aan indien nodig

            // Toon de afbeelding
            echo $afbeelding;
        } else {
            // Toon een standaardafbeelding of foutafbeelding als gewenst
            // echo file_get_contents('path/to/default-image.jpg');
            echo "Geen afbeelding gevonden voor dit gerecht.";
        }
    } else {
        // Toon een foutmelding als de query mislukt
        echo "Fout bij het uitvoeren van de query: " . $conn->error;
    }
} else {
    echo "Ongeldig gerechtid.";
}

include 'db_connection.php';
?>
