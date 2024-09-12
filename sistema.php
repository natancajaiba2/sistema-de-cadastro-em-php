<?php
require_once ("Pessoa.php");
require_once ("Cliente.php");
require_once ("Funcionario.php");
require_once("Gerente.php");

$pessoa1 = new Pessoa();
$pessoa1->cadastrar();
$cliente1 = new Cliente();
$cliente1-> cadastrar();
$funcionario1 = new Funcionario();
$funcionario1-> cadastrar();
$gerente1 = new Gerente();
$gerente1-> cadastrar();


?>