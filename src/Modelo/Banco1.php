<?php
//------Requires---------//
require_once 'autoload.php';//Para não precisar fazer varios require_once

use Alura\Banco\modelo\Conta\Titular;
use Alura\Banco\modelo\Endereco;
use Alura\Banco\modelo\Cpf;
use Alura\Banco\modelo\Conta\Conta;

////////////////////////////
$endereco = new Endereco ('Shingashima','End-Wall','Historia Freecs','4.2');
$zeke = new Titular(new Cpf("123.231.210-21"),"Zeke Yeager",$endereco);
$primeiraconta = new Conta($zeke);
$Yelena = new Titular(new Cpf("123.231.210-21"),"Yelena",$endereco);
$segundaconta = new Conta($Yelena);

//Estado consistente***
$primeiraconta->depositar(150);
$primeiraconta->sacar(100);
$segundaconta->depositar(512);

$outroadress = new Endereco('Royal Capital','Royal street','Ymir','3.1');
$outra = new Conta(new Titular(new Cpf("123.231.210-21"),"Historia Freecs",$outroadress));

var_dump($primeiraconta);
var_dump($segundaconta);
//var_dump($outra);
//echo CONTA::retornarnumcontas();
 ?>
