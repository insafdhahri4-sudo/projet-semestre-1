<?php
require_once __DIR__ . '/auth.php';
protegerPage();
$motDePasse = "Admin@2025";
echo password_hash($motDePasse, PASSWORD_DEFAULT);
