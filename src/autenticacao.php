<?php
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Funcionario.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/CPF.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Endereco.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Gerente.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Diretor.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Dev.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Editor.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Services/autenticador.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Autenticavel.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Conta/Titular.php';
//require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/autoload.php';----> Teste
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Services\CrontoladorBonificacoes;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Editor;
use Alura\Banco\Services\Autenticador;
use Alura\Banco\Modelo\Autenticavel;

$autenticador = new Autenticador();
$Karasuno_director = new Titular(new Cpf("123.123.123-12"),"Lucas",new Endereco('Tatakae','Tatakae','Tatakae','Tatakae'));
//CPF $cpf,string $nome, Endereco $endereco
$autenticador->tentarlogin($Karasuno_director,'abcd');




 ?>
