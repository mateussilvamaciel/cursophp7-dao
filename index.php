<?php

require_once("config.php");

$Zoro = new Usuario();

$Zoro->loadById(4);

echo $Zoro;


?>