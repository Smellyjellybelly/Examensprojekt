<?php
require_once 'config.php';

// Din kod här, t.ex. SQL-frågor
$sql = "SELECT * FROM some_table";
$result = $conn->query($sql);

// Hantera resultat
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

echo __DIR__ . '/../config.php';  // Kolla vilken sökväg den försöker använda

