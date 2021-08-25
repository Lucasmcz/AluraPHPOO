<?php
namespace Alura\Banco\modelo\Conta;
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/autoload.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Endereco.php';
require_once 'Titular.php';
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/CPF.php';
require_once 'Conta.php';


class Corrente extends Conta
{
  protected function percentualtarifas():float
    {
      return 0.05;
    }

    public function transferir(float $valorAtransferir, Conta $contadestino):void
    {
      if($this->saldo < $valorAtransferir)
      {
        echo "Impossible";
      }
      else
      {
        $this->sacar($valorAtransferir);
        $contadestino->depositar($valorAtransferir);
      }
    }

}

 ?>
