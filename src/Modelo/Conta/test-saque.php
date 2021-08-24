<?php
//Classes FILHAS SOBREPOSIÇÃO DE METODOS
namespace Alura\Banco\modelo\Conta;
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/autoload.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Endereco.php';
require_once 'Titular.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/CPF.php';
require_once 'Conta.php';
require_once 'conta_poupanca.php';
require_once 'conta_corrente.php';

use Alura\Banco\modelo\Cpf;
use Alura\Banco\modelo\Endereco;
use Alura\Banco\modelo\Funcionario;
use Alura\Banco\modelo\Pessoa;
use Alura\Banco\modelo\Conta\Corrente;

$conta = new Corrente(
    new Titular(
    new Cpf('124.214.144-42'),
    "Kaneki",
    new Endereco('Tokyo','Karasuno','Ohayo','993'),
    )
);
$conta->depositar(500);
$conta->sacar(100);


$conta2 = new Poupanca(
    new Titular(
    new Cpf('124.214.144-42'),
    "Kira the god of new world",
    new Endereco('Tokyo','Karasuno','Ohayo','1007'),
      )
);

$conta2->depositar(500);
$conta2->sacar(100);

echo $conta->recuperarSaldo() .PHP_EOL;
echo $conta2->recuperarSaldo();


 ?>
