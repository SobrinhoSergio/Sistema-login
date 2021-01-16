# Sistema de Login

O projeto em questão, trata-se de um Sistema desenvolvido com PHP Orientado a Objetos com o intuito de práticar todas as tecnologias aprendidas, como PHP, POO, PDO, MySQL e HTML e CSS. 

## O que o Sistemas faz?

Um sistema cadastra usuários no Banco de Dados, e faz as devidas validações quanto as regras pré-estabelecidas. Como por exemplo, se já existe e-mail cadastrado no Banco de Dados. Logo depois, o usuário tendo seu e-mail e senha cadastrados. Ele já poderá Logar no Sistema, respeitanddo a senha e e-mail inseridos no BD. E, por conseguinte, poderá entrar na Área Restrita, que não é acessível a todos. 

## Como usar o Sistema??

1. Clone este repositório;
2. Vai até o localhost > phpmyadmin;
3. Crie um Banco de Dados chamado projeto_login;
4. Insira sql o seguinte código: 

~~~~
create database projeto_login;

use projeto_login;

create table usuarios(
    id_usuario int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(30),
    telefone varchar(30),
    email varchar(40),
    senha varchar(32)
);
~~~~

5. Salve o BD. 

#### Valeu!