<?php
namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
{
  public function calculabonificalcao():float
  {
    return $this->salario*2;
  }

  public function podeAutenticar(string $senha): bool
  {
      return $senha === '1234';
  }

}




 ?>
