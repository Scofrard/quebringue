<?php
$host = "localhost";
$dbname = "quebringue";
$username = "root";
$passwordbdd = "root";

$dsn = "mysql:host=$host;port=8889;dbname=$dbname;charset=utf8mb4"; // Ajouter charset pour éviter les problèmes d'encodage

// Initialisation de la connexion
try {
    $bdd = new PDO($dsn, $username, $passwordbdd);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion établie";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
