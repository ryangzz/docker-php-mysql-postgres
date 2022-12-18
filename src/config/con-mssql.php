<?php

$server = 'localhost'; // Se colocar localhost não irá conectar, pois o container está com o nome mrb-mysql
$user = 'sa';
$pass = 'Secret1234';
$db = 'usuario'; // Mude para o nome do seu banco

try {
    // $pdo = new PDO("sqlsrv:host=$server;dbname=$db;charset=utf8", $user, $pass);
    $pdo = new PDO("sqlsrv:Server=192.168.1.84;Database=usuario;TrustServerCertificate=true;Encrypt=no;", "sa", "Secret1234");

} catch (PDOException $err) {
    $msg = $err->getMessage();
    echo "Erro ao conectar no banco de dados: $msg";
}
