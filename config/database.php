<?php

$host = 'localhost';
$db = 'location_voiture';
$user = 'root'; // Remplacez par votre nom d'utilisateur
$pass = 'root'; // Remplacez par votre mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
