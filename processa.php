<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <style>
        body{
            background-image: URL(imagem/meu-barquinho.jpg);
            background-size: cover;
            font-size: 17pt;
            text-align: center;
            color: white;
            font-family: Arial;

        }

    </style>
</head>

<body>

<div>
<a href="cadastrar.php">
    <img src="imagem/icons/back.svg" alt="voltar">
</a>
<div>

</body>
</html>


<?php

require_once 'classes/Usuarios.php';
$u = new Usuarios();

?>

<?php

if(isset($_POST['nome'])):
    
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $conf_senha = addslashes($_POST['conf_senha']);

    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($conf_senha)):
        
        $u->conectar("projeto_login", "localhost", "root", "");

        if($u-> msgERRO == ""):

            if($senha==$conf_senha):
           
                if($u->cadastrar($nome, $telefone, $email, $senha)):
                    echo "Cadastrado com Sucesso! Acesse para entrar!";
                
                else:
                    echo "Email já cadastrado!";

                endif;

            else:
                echo "Senha e Confirmar Senha não correspondem!";

            endif;

        else:
            echo "Erro: ".$u->msgERRO;

        endif;
    
    else:
        echo "Preencha Todos os Campos";

    endif;

endif;


/* PARA COOCAR NO BD E NO README.MD
create database projeto_login;

use projeto_login;

create table usuarios(
    id_usuario int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(30),
    telefone varchar(30),
    email varchar(40),
    senha varchar(32)
);

*/

?>
