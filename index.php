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
$usuario = new Usuario();
$usuario->login("aaaa","2222");

echo $usuario;

?>