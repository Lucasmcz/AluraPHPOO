<?php
namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
  public function calculabonificalcao():float
  {
    return $this->salario*0.05;
  }
}


 ?>
