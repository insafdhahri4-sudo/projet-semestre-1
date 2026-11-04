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
function plusFaibleMoyenne($etudiants)
{
    $plusFaible = $etudiants[0]["moyenne"];
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] < $plusFaible) {
            $plusFaible = $etudiant["moyenne"];
        }
    }
    return $plusFaible;
}

function nombreMoyenne14($etudiants)
{
    $nombre = 0;
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= 14) {
            $nombre++;
        }
    }
    return $nombre;
}
function pourcentageAdmis($etudiants)
{
    $admis = 0;
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= 10) {
            $admis++;
        }
    }
    return ($admis / count($etudiants)) * 100;
}
echo "Meilleure moyenne : "
    . trouverMeilleurEtudiant($etudiants) . "<br>";

echo "Plus faible moyenne : "
    . plusFaibleMoyenne($etudiants) . "<br>";

echo "Nombre de moyennes >= 14 : "
    . nombreMoyenne14($etudiants) . "<br>";

echo "Pourcentage d'admis : "
    . pourcentageAdmis($etudiants) . "%";

?>