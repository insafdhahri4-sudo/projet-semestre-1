<?php

$etudiants = [
    ["nom" => "Khediri", "prenom" => "Ahmed", "age" => 20, "formation" => "Informatique", "moyenne" => 14.5],
    ["nom" => "Ali", "prenom" => "Sami", "age" => 21, "formation" => "Informatique", "moyenne" => 11.5],
    ["nom" => "Ben Salah", "prenom" => "Nour", "age" => 19, "formation" => "Informatique", "moyenne" => 16],
    ["nom" => "Trabelsi", "prenom" => "Amine", "age" => 20, "formation" => "Informatique", "moyenne" => 9],
    ["nom" => "Mansour", "prenom" => "Yassine", "age" => 22, "formation" => "Informatique", "moyenne" => 13],
    ["nom" => "Jlassi", "prenom" => "Mariem", "age" => 19, "formation" => "Informatique", "moyenne" => 15],
    ["nom" => "Mejri", "prenom" => "Hana", "age" => 20, "formation" => "Informatique", "moyenne" => 10],
    ["nom" => "Bouzid", "prenom" => "Ali", "age" => 21, "formation" => "Informatique", "moyenne" => 12],
    ["nom" => "Saidi", "prenom" => "Walid", "age" => 20, "formation" => "Informatique", "moyenne" => 8],
    ["nom" => "Gharbi", "prenom" => "Sara", "age" => 19, "formation" => "Informatique", "moyenne" => 17]
];
function afficherEtudiant($etudiant)
{
    echo "<p>Nom : {$etudiant['nom']}</p>";
    echo "<p>Prénom : {$etudiant['prenom']}</p>";
    echo "<p>Âge : {$etudiant['age']}</p>";
    echo "<p>formation : {$etudiant['formation']}</p>";
    echo "<p>Informatique : {$etudiant['Informatique']}</p>";
    echo "<p>Moyenne : {$etudiant['moyenne']}</p>";
    echo "<hr>";
}
function calculerMoyenneClasse($etudiants)
{
    $somme = 0;
    foreach ($etudiants as $etudiant) {
        $somme += $etudiant["moyenne"];
    }
    return $somme / count($etudiants);
}
function compterAdmis($etudiants)
{
    $nombre = 0;
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= 10) {
            $nombre++;
        }
    }
    return $nombre;
}
function rechercherEtudiant($etudiants, $nom)
{
    foreach ($etudiants as $etudiant) {
        if ($etudiant["nom"] === $nom) {
            return $etudiant;
        }
    }
    return null;
}
function filtrerMoyenne($etudiants, $minimum)
{
    $resultat = [];
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= $minimum) {
            $resultat[] = $etudiant;
        }
    }
    return $resultat;
}
afficherEtudiant($etudiants);
echo "<br>";
echo "Moyenne de la classe : " . calculerMoyenneClasse($etudiants) . "<br>";
echo "Nombre d'admis : " . compterAdmis($etudiants) . "<br>";
$recherche = rechercherEtudiant($etudiants, "Khediri");
if ($recherche != null) {
    echo "Étudiant trouvé : " . $recherche["prenom"] . "<br>";
}
echo "<br>Étudiants avec moyenne >= 14 :<br>";
$resultat = filtrerMoyenne($etudiants, 14);
afficherEtudiant($resultat);

?>