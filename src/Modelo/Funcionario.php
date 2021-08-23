<?php

namespace Alura\Banco\Modelo;
require_once "Pessoa.php";//Gambiarra

class Funcionario extends Pessoa
{

  private string $cargo;


  public function __construct(string $nome , Cpf $cpf ,string $cargo)
  {
    parent::__construct($nome,$cpf);
    $this->cargo = $cargo;
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


}




 ?>
