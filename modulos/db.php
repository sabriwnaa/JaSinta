<?php
// db.php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jasinta.sql";

$conn = new mysqli($host, $user, $pass, $dbname);

// Verifica erros
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Configura para UTF-8
$conn->set_charset("utf8mb4");
?>
