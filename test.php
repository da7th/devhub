<?php

require_once './DB/DBConnection.php';

try {
if($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    registerUser($conn, $username, $email, $password);
}
} catch (PDOException $e) {
    return "Erro ao adicionar usuário: " . $e->getMessage();
}