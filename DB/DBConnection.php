<?php

define('HOST', '127.0.0.1');
define('PORT', '3306');
define('DBNAME', 'devhub');
define('DBUSER', 'root');
define('DBPASSWORD', '');

try {
    $conn = new PDO("mysql:host=" . HOST . ";port=" . PORT . ";dbname=" . DBNAME . ";user=" . DBUSER . ";password=" . DBPASSWORD);
} catch (PDOException $e) {
    echo "Falha na conexão. Erro: " . $e->getMessage();
}

function registerUser($conn, $username, $email, $password) {

try {
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    
    $stmt->execute();

    return $stmt->execute();
} catch (PDOException $e) {
    return "Erro ao registrar usuário: " . $e->getMessage();
}

}

function listUsers($conn) {
    $stmt = $conn->prepare("SELECT * FROM users");

    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}


