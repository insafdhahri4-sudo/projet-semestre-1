<?php
session_start();
require_once __DIR__ . '/auth.php';
protegerPage();
require_once __DIR__ . '/connexion-bdd.php';
$erreur = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
if ($username === '' || $password === '') {
$erreur = "Veuillez remplir tous les champs.";
} else {
$sql = "SELECT id, username, password_hash, role, actif
FROM utilisateurs
WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username' => $username]);
$utilisateur = $stmt->fetch();
if ($utilisateur &&
(int) $utilisateur['actif'] === 1 &&
password_verify($password, $utilisateur['password_hash'])) {
$_SESSION['connecte'] = true;
$_SESSION['user_id'] = (int) $utilisateur['id'];
$_SESSION['username'] = $utilisateur['username'];
$_SESSION['role'] = $utilisateur['role'];
header("Location: dashboard.php");
exit;
} else {

$erreur = "Identifiants incorrects.";
}
}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Connexion</title>
</head>
<body>
<h1>Connexion</h1>
<?php if ($erreur !== ''): ?>
<p style="color:red;"><?= htmlspecialchars($erreur) ?></p>
<?php endif; ?>
<form method="POST">
<label for="username">Nom d'utilisateur :</label>
<input id="username" type="text" name="username" required>
<label for="password">Mot de passe :</label>
<input id="password" type="password" name="password" required>
<button type="submit">Se connecter</button>
<a href="deconnexion.php">Se déconnecter</a>
</form>
</body>
</html>