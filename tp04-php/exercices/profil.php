<?php
session_start();
echo "Nom : ".$_SESSION['nom']."<br>";
echo "prenom : ".$_SESSION['prenom']."<br>";
echo "formation : ".$_SESSION['formation']."<br>";
echo "age : ".$_SESSION['age']."<br>";
echo "email : ".$_SESSION['email']."<br>";
?>