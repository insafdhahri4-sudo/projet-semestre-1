<?php
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT)
   ?? filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$sql = "UPDATE etudiants SET nom=:nom, prenom=:prenom, age=:age,
        formation=:formation, moyenne=:moyenne WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute([]);