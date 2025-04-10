<?php
require_once __DIR__ . '/../vendor/autoload.php';  // Lägg till autoload.php här

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();  // Ladda miljövariabler från .env-filen

// Använd miljövariabler som du har definierat i .env
$servername = $_ENV['DB_SERVER'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

// Skapa en MySQL-anslutning
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollera anslutningen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
