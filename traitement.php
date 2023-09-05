<?php
// Informations de connexion à la base de données
$hostname = 'localhost';  // Nom d'hôte de la base de données
$username = 'root';  // Nom d'utilisateur de la base de données
$password = '';  // Mot de passe de la base de données
$database = 'form_php';  // Nom de la base de données

// Connexion à la base de données
$connection = new mysqli($hostname, $username, $password, $database);

// Vérification de la connexion
if ($connection->connect_error) {
    die('Erreur de connexion à la base de données : ' . $connection->connect_error);
}

// Récupération des données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assure-toi d'adapter ces noms de champs en fonction de ton formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validation et nettoyage des données (à personnaliser selon tes besoins)

    // Insertion des données dans la base de données
    $query = "INSERT INTO users (nom, email, message) VALUES ('$nom', '$email', '$message')";

    if ($connection->query($query) === true) {
        echo 'Les données ont été enregistrées avec succès dans la base de données.';
    } else {
        echo 'Erreur lors de l\'enregistrement des données : ' . $connection->error;
    }
}

// Fermeture de la connexion à la base de données
$connection->close();
?>
