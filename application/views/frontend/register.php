<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $identification = $_POST['identification'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $nationalite = $_POST['nationalite'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (identification, prenom, email, address, gender, nationalite, phone, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$identification, $prenom, $email, $address, $gender, $nationalite, $phone, $password])) {
        echo 'Inscription réussie';
    } else {
        echo 'Erreur lors de l\'inscription';
    }
}
?>
