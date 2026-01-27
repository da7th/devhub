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




