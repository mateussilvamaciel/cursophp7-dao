<?php

require_once("config.php");

$Joama = new Usuario();

$Joama->loadById(2);

echo $Joama;

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

?>