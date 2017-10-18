<?php 

require_once("config.php");

/*
$root = new Usuario();
$root->loadbyId(1);
echo $root;
*/

/*
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
$busca = Usuario::search("koe");
echo json_encode($busca);
*/

/*
$usuario = new Usuario();
$usuario->login("koe", "123");

echo $usuario;
*/

/*
$aluno = new Usuario("Ridineu", "irineu");
$aluno->insert();
echo $aluno;
*/

/*
$usuario = new Usuario();
$usuario->loadbyId(1);
$usuario->update("professor", "aaa");

echo $usuario;
*/


$usuario = new Usuario();
$usuario->loadbyId(5);
$usuario->delete();

echo $usuario;
 ?>