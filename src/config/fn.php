<?php

function listarUsuariosMysql()
{
    include 'con-mysql.php';
    $sql = 'SELECT * FROM usuario';
    $query = $pdo->prepare($sql);
    $query->execute();
    $rowCount = $query->rowCount();
    echo "<h1>$rowCount USUARIOS</h1>";
    foreach ($query as $row) {
        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        echo "<p>$id - $nome - $email</p>";
    }
}

function listarUsuariosPgsql()
{
    include 'con-pgsql.php';
    $sql = 'SELECT datname    FROM pg_database;';
    $query = $pdo->prepare($sql);
    $query->execute();
    $rowCount = $query->rowCount();
    echo "<h1>$rowCount BASAS DE DATOS</h1>";
    foreach ($query as $row) {
        $nome = $row['datname'];
        echo "<p>DATABASE - $nome </p>";
    }
}
