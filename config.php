<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "garage_v_parrot";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Définir le jeu de caractères à utiliser
mysqli_set_charset($conn, "utf8");
?>
