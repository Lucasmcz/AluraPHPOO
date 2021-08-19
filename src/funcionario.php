<?php

require_once 'pessoa.php';
class Funcionario extends Pessoa
{

  private string $cargo;
  private $endereco;

  public function __construct(string $nome , Cpf $cpf , Endereco $endereco)
  {
    parent::__construct($nome,$cpf);
    $this->endereco = $endereco;
  }


  public function getcargo(string $cargo)
  {
    return $this->nome;
  }
  public function alteranome(string $nome):void
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }


}




 ?>
