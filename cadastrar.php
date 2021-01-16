<?php

require_once 'classes/Usuarios.php';
$u = new Usuarios();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" href="imagens/icon/faicon.jpg">
</head>

<body>

<div id="corpo-form-cad">
    <h1>Cadastre-se, El Macho</h1>

    <form method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" maxlength="30"/>
        <input type="text" name="telefone" placeholder="Telefone" maxlength="30"/>
        <input type="email" name="email" placeholder="Usuário" maxlength="40"/>
        <input type="password" name="senha" placeholder="Senha" maxlength="15"/>
        <input type="password" name="conf_senha" placeholder="Confirmar Senha"/>
        <input type="submit" value="CADASTRAR" name="" maxlength="15"/>
    </form>
</div>

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

                    ?>

                    <div id="msg-sucesso">
                        Cadastrado com Sucesso! Acesse para entrar!
                    </div>

                    <?php
                
                else:

                    ?>

                    <div class="msg-erro">
                        Email já cadastrado!
                    </div>

                    <?php

                endif;

            else:

                ?>

                    <div class="msg-erro">
                        Senha e Confirmar Senha não correspondem!
                    </div>

                    <?php

            
            endif;


        else:

            ?>
           
            <div class="msg-erro"> 
                
                 <?php echo "Erro: ".$u->msgERRO; ?>
            
            </div>

            <?php

        endif;
    
    else:
        ?>

            <div class="msg-erro">
                Preencha Todos os Campos!
            </div>

        <?php

    endif;

endif;

?>

</body>
</html>
