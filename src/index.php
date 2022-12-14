<?php

include 'config/con-mysql.php';
include 'config/fn.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker PHP + Apache + MySQL + PostgreSQL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section>
        <div onclick="handleGoToPgsql()">
            <h2>Hello World - PDO MySQL - <?= date('d/m/Y H:i:s') ?></h2>
            <span><?= listarUsuariosMysql() ?></span>
        </div>
    </section>

    <section>
        <div onclick="handleGoToPgsql()">
            <h2>Hello World - PDO MySQL - <?= date('d/m/Y H:i:s') ?></h2>
            <span><?= listarUsuariosPgsql() ?></span>
        </div>
    </section>

    <section>
        <div onclick="handleGoToPgsql()">
            <h2>Hello World - MSSQL - <?= date('d/m/Y H:i:s') ?></h2>
            <span><?= listarUsuariosMssql() ?></span>
        </div>
    </section>

    <script>
        const handleGoToPgsql = () => {
            window.location.href = 'pgsql.php'
        }
    </script>

</body>

</html>