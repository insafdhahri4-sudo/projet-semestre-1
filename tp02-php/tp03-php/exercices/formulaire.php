<?php
$etudiants = [];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$age = $_POST["age"];
$formation = $_POST["formation"];
$moyenne = $_POST["moyenne"];
$etudiants[] = [
    "nom" => $nom,
    "prenom" => $prenom,
    "age" => $age,
    "formation" => $formation,
    "moyenne" => $moyenne
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des étudiants</title>
</head>
<body>
    <h2>Ajouter un étudiant</h2>
    <form method="POST" action="">
        Nom : <input type="text" name="nom"><br>
        Prénom : <input type="text" name="prenom"><br>
        Age : <input type="number" name="age"><br>
        Formation : <input type="text" name="formation"><br>
        Moyenne : <input type="number" name="moyenne"><br>
        <button type="submit">Ajouter</button>
    </form>
    <h2>Liste des étudiants</h2>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Formation</th>
            <th>Moyenne</th>
        </tr>
        <?php foreach ($etudiants as $etudiant) { ?>
            <tr>
                <td><?= $etudiant["nom"] ?></td>
                <td><?= $etudiant["prenom"] ?></td>
                <td><?= $etudiant["age"] ?></td>
                <td><?= $etudiant["formation"] ?></td>
                <td><?= $etudiant["moyenne"] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>