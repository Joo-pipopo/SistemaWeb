<?php
require_once("controllerCadastro.php");

$controller = new controllerCadastro();
$resultado = $controller->excluir($_GET['id']);
?>
