<?php

require_once("config.php");
//carrega um usuario
//$Joama = new Usuario();
//$Joama->loadById(2);
//echo $Joama;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("Lu");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("Zoro","esp");

echo $usuario;

?>