<?php
$servername = "localhost";
$username = "root";  // Remplacez par votre nom d'utilisateur MySQL
$password = "awossi";      // Remplacez par votre mot de passe MySQL
$dbname = "signup_form";  // Nom de la base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>