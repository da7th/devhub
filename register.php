<?php
require_once './DB/DBConnection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Formulário de cadastro</h1>
    <form action="./test.php" method="POST">
    <label for="username">Nome de usuário:</label>
    <input type="text" name="username" />
    <label for="email">E-mail:</label>
    <input type="email" name="email" />
    <label for="password">Senha:</label>
    <input type="password" name="password" />

    <button type="submit">Cadastrar</button>
    </form>
</body>
</html>