<?php
$erreurs = [];
if (empty($_POST['nom'])) {
    $erreurs[] = "Le nom est obligatoire.";
}
if (empty($_POST['prenom'])) {
    $erreurs[] = "Le prenom est obligatoire.";
}
if ( empty($_POST['age']) &&($_POST['age'] < 16 || $_POST['age']> 40) ){
    $erreurs[] = "L'âge doit être compris entre 16 et 40 ans.";
}
if (empty($_POST['formation'])) {
    $erreurs[] = "Le formation est obligatoire.";
}
if (empty($_POST['moy'])&&($_POST['moy'] < 0 || $_POST['moy'] > 20) ) {
    $erreurs[] = "Le moyenne est obligatoire.";
}
if (count($erreurs) > 0) {
    foreach ($erreurs as $erreur) {
        echo "<p>$erreur</p>";
    }
} else {
    echo "<p>Toutes les données sont renseignées</p>";
}
echo "<p>Nom :".$_POST['nom']."</p>";
echo "<p>Prénom :".$_POST['prenom']."</p>";
echo "<p>Âge :".$_POST['age']."</p>";
echo "<p>Formation :".$_POST['formation']."</p>";
echo "<p>Moyenne :".$_POST['moy']." / 20</p>";
function resultat($moyenne)
{
if ($moyenne >= 10) {
return "Admis";
}
return "Ajourné";
}
echo "<p>Résultat :".resultat($_POST['moy'])."</p>";
?>
<form method="POST">
    <label>Nom :</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($nom ?? '') ?>"><br>
    <label>Prénom :</label>
    <input type="text" name="prenom" value="<?= htmlspecialchars($prenom ?? '') ?>"><br>
    <label>Âge :</label>
    <input type="number" name="age" value="<?= htmlspecialchars($age ?? '') ?>"><br>
    <label>Formation :</label>
    <input type="text" name="formation" value="<?= htmlspecialchars($formation ?? '') ?>"><br>
    <label>Moyenne :</label>
    <input type="text" name="moy" value="<?= htmlspecialchars($moy ?? '') ?>"><br>
    <button type="submit">Envoyer</button>
</form>
