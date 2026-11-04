<?php
session_start();
$_SESSION['nom'] = "Ahmed";
$_SESSION['prenom'] = "Ali";
$_SESSION['formation'] = "Informatique";
$_SESSION['age'] = "30";
$_SESSION['email'] = "ahmed11@gmail.com";
echo "Session créée.";
?>