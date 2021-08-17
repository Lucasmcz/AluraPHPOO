<?php

require_once 'CONTA.php';
require_once 'titular.php';
$zeke = new Titular("123.231.210-21","Zeke Yeager");
$primeiraconta = new Conta($zeke);
$Yelena = new Titular("210.215.901-12","Yelena");
$segundaconta = new Conta($Yelena);

//Estado consistente***
$primeiraconta->depositar(150);
$primeiraconta->sacar(100);
echo $primeiraconta->recuperarNomeTitular() .PHP_EOL;
echo $primeiraconta->recuperarCpfTitular() .PHP_EOL;

var_dump($primeiraconta);

echo CONTA::retornarnumcontas();
 ?>
