<?php

namespace Alura\Banco\Modelo\Funcionario;
require_once "/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Pessoa.php";//Gambiarra
require_once "/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/CPF.php";
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
abstract class Funcionario extends Pessoa
{

  private string $cargo;
  protected float $salario;

  public function __construct(string $nome , Cpf $cpf ,string $cargo,float $salario)
  {
    parent::__construct($nome,$cpf);
    $this->cargo = $cargo;
    $this->salario = $salario;
  }


  public function getcargo(string $cargo):string
  {
    return $this->cargo;
  }
  public function alteranome(string $nome):void
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }

  public function getsalario(float $salario):float
  {
    return $this->salario;
  }

  public function calculabonificalcao():float
  {
    return $this->salario *0.1;
  }

}




 ?>
