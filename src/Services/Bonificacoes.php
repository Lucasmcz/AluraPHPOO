<?php

require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Funcionario.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/CPF.php';
require_once 'controladorboni.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Gerente.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Diretor.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Dev.php';
//Chamadas do Use
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Services\CrontoladorBonificacoes;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;




$outro_funcionario = new Gerente('Yelena', new Cpf('123.456.230-13'), 'Gerente' , 3000);//3K
$finally = new Diretor('Baiano',new Cpf('213.323.213-45'),'Diretor',1000);//2K
$our_first_major_victory = new Desenvolvedor('Yelena Fan',new Cpf('123.124.130-14'),'Dev PHP',1000);//


$controlador = new CrontoladorBonificacoes();

//var_dump($controlador);
$controlador->adicionar_bonificacoes($outro_funcionario);
$controlador->adicionar_bonificacoes($finally);
$controlador->adicionar_bonificacoes($our_first_major_victory);
echo $controlador->getTotal();





 ?>
