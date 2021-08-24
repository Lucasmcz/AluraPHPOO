<?php

namespace Alura\Banco\Services;
require_once "/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Pessoa.php";//Gambiarra

require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Funcionario/Funcionario.php';

use  Alura\Banco\Modelo\Funcionario\Funcionario;

class CrontoladorBonificacoes
{
  private float $totalbonificacoes = 0;

  public function adicionar_bonificacoes(Funcionario $funcionario):float
  {
    $this->totalbonificacoes += $funcionario->calculabonificalcao();
    return $this->totalbonificacoes;
  }

  public function getTotal():float
  {
    return $this->totalbonificacoes;
  }
}




 ?>
