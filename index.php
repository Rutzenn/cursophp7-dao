<?php

require_once("config.php");

//Carrega um usuário        funciona
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

//Carrega uma lista de usuários     funciona
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login      funciona
//$search = Usuario::search("te");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha        funciona
//$usuario = new Usuario();
//$usuario->login("aaaa","2222");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("aluno3","pao");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(16);

$usuario->update("professor", "klasdj");

echo $usuario;
?>