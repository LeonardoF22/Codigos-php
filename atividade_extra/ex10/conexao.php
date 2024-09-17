<?php
$host = 'localhost';
$dbname = 'calendario_eventos';
$username = 'root';
$password = '0000';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e -> getMessage());
}

?>