<?php
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/autoload.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Endereco.php';
require_once 'Titular.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/CPF.php';
require_once 'Conta.php';
use Alura\Banco\modelo\Conta\Titular;
use Alura\Banco\modelo\Endereco;
use Alura\Banco\modelo\Cpf;
use Alura\Banco\modelo\Conta\Conta;

$endereco = new Endereco('Miyagi','Karasuno','ThisAngle','5.0');
$Kageyama = new Titular(new Cpf("123.231.210-21"),"Kageyama",$endereco);
$conta_kageyama = new Conta($Kageyama);

var_dump($conta_kageyama);


 ?>
