<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<div id="corpo-form-cad">
    <h1>Cadastrar</h1>

    <form action="processa.php" method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" maxlength="30"/>
        <input type="text" name="telefone" placeholder="Telefone" maxlength="30"/>
        <input type="email" name="email" placeholder="Usuário" maxlength="40"/>
        <input type="password" name="senha" placeholder="Senha" maxlength="15"/>
        <input type="password" name="conf_senha" placeholder="Confirmar Senha"/>
        <input type="submit" value="CADASTRAR" name="" maxlength="15"/>
    </form>
<div>
</body>
</html>
