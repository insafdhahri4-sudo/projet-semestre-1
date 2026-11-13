<?php
require_once __DIR__ . '/connexion.php';
$message = '';
$erreurs = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom       = trim($_POST['nom'] ?? '');
    $prenom    = trim($_POST['prenom'] ?? '');
    $age       = $_POST['age'] ?? '';
    $formation = trim($_POST['formation'] ?? '');
    $moyenne   = $_POST['moyenne'] ?? '';

    if ($nom === '' || $prenom === '' || $formation === '') {
        $erreurs[] = "Nom, prénom et formation sont obligatoires.";
    }
    if (filter_var($age, FILTER_VALIDATE_INT) === false || (int)$age < 16) {
        $erreurs[] = "L'âge doit être un entier supérieur ou égal à 16.";
    }
    if (!is_numeric($moyenne) || $moyenne < 0 || $moyenne > 20) {
        $erreurs[] = "La moyenne doit être comprise entre 0 et 20.";
    }

    if (!$erreurs) {
        $sql = "INSERT INTO etudiants (nom, prenom, age, formation, moyenne)
                VALUES (:nom, :prenom, :age, :formation, :moyenne)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'nom' => $nom, 'prenom' => $prenom, 'age' => (int)$age,
            'formation' => $formation, 'moyenne' => (float)$moyenne
        ]);
        $message = "Étudiant ajouté avec succès.";
    }
}
$sql = "INSERT INTO etudiants
(nom, prenom, age, formation, moyenne)
VALUES
(:nom, :prenom, :age, :formation, :moyenne)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
'nom' => $nom,
'prenom' => $prenom,
'age' => $age,
'formation' => $formation,
'moyenne' => $moyenne
]);
?>
<form method="POST">
<label for="nom">Nom :</label>
<input id="nom" type="text" name="nom" required>
<label for="prenom">Prénom :</label>
<input id="prenom" type="text" name="prenom" required>
<label for="age">Âge :</label>
<input id="age" type="number" name="age" min="16" max="100" required>
<label for="formation">Formation :</label>
<input id="formation" type="text" name="formation" required>

<label for="moyenne">Moyenne :</label>
<input id="moyenne" type="number" name="moyenne"
min="0" max="20" step="0.01" required>
<button type="submit">Ajouter</button>
</form>