<?php
// Connexion MySQL via proxy localhost:3306
$host = '127.0.0.1';
$port = 3307;
$dbname = 'appdb';
$user = 'root'; // on utilise root car IAM auth bypass la pass (proxy)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Connexion à la base réussie !  weyyy";
} catch (PDOException $e) {
    echo "Erreur de connexion , tra chbiha :D : " . $e->getMessage();
}
?>