<?php

function determinerResultat($moyenne)
{
    if ($moyenne >= 10) {
        return "Admis";
    }

    return "Ajourné";
}

function appreciation($moyenne)
{
    if ($moyenne < 10) {
        return "Insuffisant";
    } elseif ($moyenne < 12) {
        return "Passable";
    } elseif ($moyenne < 14) {
        return "Assez bien";
    } elseif ($moyenne < 16) {
        return "Bien";
    }

    return "Très bien";
}

function afficherEtudiant($etudiant)
{
    echo "<p>Nom : {$etudiant['nom']}</p>";
    echo "<p>Prénom : {$etudiant['prenom']}</p>";
    echo "<p>Âge : {$etudiant['age']}</p>";
    echo "<p>Moyenne : {$etudiant['moyenne']}</p>";

    echo "<p>Résultat : " .
        determinerResultat($etudiant['moyenne']) . "</p>";

    echo "<p>Appréciation : " .
        appreciation($etudiant['moyenne']) . "</p>";

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

?>