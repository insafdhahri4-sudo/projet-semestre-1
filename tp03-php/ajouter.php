<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$formation = $_POST['formation'];
$moy = $_POST['moy'];
$erreurs = [];
if (empty($nom)) {
    $erreurs[] = "la saisie d'un nom est obligatoire";
}
if (empty($prenom)) {
    $erreurs[] = "la saisie d'un prenom est obligatoire";
}
if (empty($age)) {
    $erreurs[] = "la saisie d'un age est obligatoire";
}
if (empty($formation)) {
    $erreurs[] = "la saisie d'une formation est obligatoire";
}
if (empty($moy)) {
    $erreurs[] = "la saisie d'une moyenne est obligatoire";
}
if (count($erreurs) > 0) {
    foreach ($erreurs as $erreur) {
        echo "<p>" . $erreur . "</p>";
    }
} else {
    echo "<p>Toutes les données sont renseignées.</p>";
    $etudiant = [
        "nom" => $nom,
        "prenom" => $prenom,
        "age" => $age,
        "formation" => $formation,
        "moyenne" => $moy
    ];
}
?>
<form method="POST">
    <label>Nom :</label>
    <input type="text" name="nom" ><br>
    <label>Prénom :</label>
    <input type="text" name="prenom"><br>
    <label>Âge :</label>
    <input type="number" name="age" ><br>
    <label>Formation :</label>
    <input type="text" name="formation" ><br>
    <label>Moyenne :</label>
    <input type="text" name="moy" ><br>
    <button type="submit">Envoyer</button>
</form>