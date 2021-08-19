<?php

namespace Alura\Banco\modelo;
//------Requires---------//
require_once 'CONTA.php';
require_once 'endereco.php';
require_once 'titular.php';
require_once 'cpf.php';

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
var_dump($outra);
//echo CONTA::retornarnumcontas();
 ?>
