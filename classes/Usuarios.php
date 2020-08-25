<?php

class Usuarios{

    private $pdo; 
    public $msgERRO = "";

    public function conectar($nome, $host, $usuario, $senha){

        global $pdo;
        global $msgERRO;

        try{
            $pdo = new PDO("mysql:bdname=".$nome.";host=".$host,$usuario,$senha);

        }
        catch (PDOException $e){
            $msgERRO = $e->getMessage();

        }
    }

    public function cadastrar($nome, $telefone, $email, $senha){
        global $pdo;
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql = bindValue(":e", $email);
        $sql = execute();

        if ($sql->rowCount()>0):
            
            return false; else:

            $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
        $sql = bindValue(":n", $nome);
        $sql = bindValue(":t", $telefone);
        $sql = bindValue(":e", $email);
        $sql = bindValue(":s", $senha);

        $sql->execute();
        return true;

        endif;
    }

    public function logar($email, $senha){

        global $pdo;


    }
}