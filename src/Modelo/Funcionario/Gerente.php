<?php
namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
  public function calculabonificalcao():float
  {
    return $this->salario;
  }
}


 ?>
