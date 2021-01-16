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
    <title>Área Restrita</title>
    <link rel="stylesheet" href="style/area_privada.css">
    <link rel="shortcut icon" href="imagens/icon/faicon.jpg">
</head>
<body>


<div id="cortes">

<h1>Confira Nossos Cortes....</h1>

<a href="sair.php">Sair</a>

</div>

</body>
</html>