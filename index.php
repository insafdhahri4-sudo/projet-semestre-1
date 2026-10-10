<?php
$etudiants = [
[
"nom" => "Khediri",
"prenom" => "Ahmed",
"age" => 20,
"moyenne" => 14.5
],
[
"nom" => "Ali",
"prenom" => "Sami",
"age" => 21,
"moyenne" => 3
],
[
"nom" => "Ben Salah",
"prenom" => "Nour",
"age" => 19,
"moyenne" => 16
]
];
function determinerResultat($moyenne){
    if ($moyenne >= 10) {
        return "Admis";
    }
        return "Ajourné";
}
function appreciation($moyenne){
    if ($moyenne < 10) {
        return "Insuffisant";
    }
    elseif ($moyenne < 12) {
        return "Passable";
    } 
    elseif ($moyenne < 14) {
        return "Assez bien";
    } 
    elseif ($moyenne < 16) {
        return "Bien";
    }

    return "Très bien";
}
function calculerMoyenneClasse($etudiants)
{
    $somme = 0;

    foreach ($etudiants as $etudiant) {
        $somme += $etudiant["moyenne"];
    }

    return $somme / count($etudiants);
}
function nombreAdmis($etudiants)
{
    $nombre = 0;
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= 10) {
            $nombre++;
        }
    }
    return $nombre;
}
echo "<h2>Liste des étudiants</h2>";
foreach($etudiants as $etudiant){
    afficherEtudiant($etudiant);
}
function afficherEtudiant($etudiant){
    echo "<p>Nom : {$etudiant['nom']}</p>";
    echo "<p>Prénom : {$etudiant['prenom']}</p>";
    echo "<p>Âge : {$etudiant['age']}</p>";
    echo "<p>Moyenne : {$etudiant['moyenne']}</p>";
    echo "<p>Résultat : " .
    determinerResultat($etudiant['moyenne']) . "</p>";
    echo "<p>Appréciation : " .
    appreciation($etudiant['moyenne']) . "</p>";
}
echo "<h3>Statistiques</h3>";

echo "Nombre d'étudiants : " . count($etudiants) . "<br>";

echo "Moyenne de la classe : "
    . calculerMoyenneClasse($etudiants) . "<br>";

echo "Nombre d'admis : "
    . nombreAdmis($etudiants) . "<br>";
function trouverMeilleurEtudiant($etudiants)
{
    $meilleur = $etudiants[0];
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] > $meilleur["moyenne"]) {
            $meilleur = $etudiant;
        }
    }
    return $meilleur;
}
$meilleur = trouverMeilleurEtudiant($etudiants);
echo "Meilleur étudiant : " . $meilleur["nom"] . " ";
echo $meilleur["prenom"] . "<br>";
echo "Moyenne : " . $meilleur["moyenne"];

?>