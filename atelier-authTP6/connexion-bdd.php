<?php
require_once __DIR__ . '/auth.php';
protegerPage();
$host = 'localhost';
$dbname = 'gestion_etudiants';
$username = 'dsi222627';
$password = 'Dsi222627.';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
try {
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION
);
$pdo->setAttribute(
PDO::ATTR_DEFAULT_FETCH_MODE,
PDO::FETCH_ASSOC
);
} catch (PDOException $e) {
exit("Erreur de connexion à la base de données.");
}