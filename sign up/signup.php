<?php
// Inclure le fichier de connexion à la base de données
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $sex = $_POST['input_sex'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];

    // Validation côté serveur
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($password) || empty($password_conf)) {
        echo "Tous les champs sont requis.";
        exit;
    }

    if ($password !== $password_conf) {
        echo "Les mots de passe ne correspondent pas.";
        exit;
    }

    // Hash du mot de passe
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO users (sex, first_name, last_name, email, phone, password_hash) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $sex, $first_name, $last_name, $email, $phone, $password_hash);

    if ($stmt->execute()) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}