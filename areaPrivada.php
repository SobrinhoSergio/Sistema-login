<?php

    session_start();

    if(!isset($_SESSION['id_usuario'])):

        header("location: index.php");
        exit;

    endif;


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Document</title>
</head>
<body>

<h2>Área Restrita aos usuários</h2>

<a href="sair.php">Sair</a>

</body>
</html>