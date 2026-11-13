<?php
require_once __DIR__ . '/connexion.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { exit("Méthode non autorisée."); }
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if ($id === false || $id === null) { exit("Identifiant invalide."); }

$stmt = $pdo->prepare("DELETE FROM etudiants WHERE id = :id");
$stmt->execute(['id' => $id]);

if ($stmt->rowCount() === 0) { echo "Aucun étudiant ne correspond à cet identifiant."; }
else { echo "Étudiant supprimé."; }