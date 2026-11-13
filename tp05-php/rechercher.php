<?php
require_once __DIR__ . '/connexion.php';
$nomRecherche = trim($_GET['nom'] ?? '');
$etudiants = [];

if ($nomRecherche !== '') {
    $sql = "SELECT id, nom, prenom, age, formation, moyenne
            FROM etudiants WHERE nom LIKE :nom ORDER BY nom, prenom";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nom' => '%' . $nomRecherche . '%']);
    $etudiants = $stmt->fetchAll();
}
?>
<form method="GET">
<label for="nom">Nom à rechercher :</label>
<input id="nom" type="text" name="nom">
<button type="submit">Rechercher</button>
</form>
