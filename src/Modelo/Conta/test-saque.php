<?php
//Classes FILHAS SOBREPOSIÇÃO DE METODOS
namespace Alura\Banco\modelo\Conta;
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/autoload.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Endereco.php';
require_once 'Titular.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/CPF.php';
require_once 'Conta.php';
require_once 'conta_poupanca.php';

use Alura\Banco\modelo\Cpf;
use Alura\Banco\modelo\Endereco;
use Alura\Banco\modelo\Funcionario;
use Alura\Banco\modelo\Pessoa;

$conta = new Conta
(new Titular(
new Cpf('124.214.144-42'),
"Kaneki",
new Endereco('Tokyo','Karasuno','Ohayo','993'),
)
);


$conta->depositar(500);
$conta->sacar(100);


echo $conta->recuperarSaldo();


 ?>
