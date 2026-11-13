<?php
require_once __DIR__ . '/connexion.php';
$sql = "SELECT id, nom, prenom, age, formation, moyenne
FROM etudiants
ORDER BY nom, prenom";
$stmt = $pdo->query($sql);
$etudiants = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Liste des étudiants</title>
</head>
<body>
<h1>Liste des étudiants</h1>
<table border="1" cellpadding="8">
<thead>
<tr>
<th>ID</th>
<th>Nom</th>
<th>Prénom</th>
<th>Âge</th>
<th>Formation</th>
<th>Moyenne</th>
</tr>
</thead>
<tbody>
<?php foreach ($etudiants as $etudiant): ?>
<tr>
<td><?= (int) $etudiant['id'] ?></td>
<td><?= htmlspecialchars($etudiant['nom']) ?></td>
<td><?= htmlspecialchars($etudiant['prenom']) ?></td>
<td><?= (int) $etudiant['age'] ?></td>
<td><?= htmlspecialchars($etudiant['formation']) ?></td>
<td><?= htmlspecialchars((string) $etudiant['moyenne']) ?>

</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<form method="POST" action="supprimer.php"
      onsubmit="return confirm('Supprimer cet étudiant ?');">
    <input type="hidden" name="id" value="<?= (int)$etudiant['id'] ?>">
    <button type="submit">Supprimer</button>
</form>
</body>
</html>