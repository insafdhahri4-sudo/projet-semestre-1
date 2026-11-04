<?php
$etudiants = [
    [
        "nom" => "Ahmed",
        "prenom" => "Ali",
        "age" => 21,
        "formation" => "Informatique",
        "moyenne" => 14.5
    ],
    [
        "nom" => "Dupont",
        "prenom" => "Sara",
        "age" => 20,
        "formation" => "Informatique",
        "moyenne" => 12
    ],
    [
        "nom" => "Ben Ali",
        "prenom" => "Mohamed",
        "age" => 22,
        "formation" => "Mathématiques",
        "moyenne" => 9
    ]
];
if (isset($_GET['nom'])) {
    $recherchenom = $_GET['nom'];

    foreach ($etudiants as $etudiant) {
        if ($etudiant['nom']==$recherchenom) {
            echo "<p>Nom " . $etudiant['nom'] . " est trouvé</p>";
        }
    }
}
?>
<form method="GET">
    <input type="text" name="nom">
    <button type="submit">Rechercher</button>
</form>