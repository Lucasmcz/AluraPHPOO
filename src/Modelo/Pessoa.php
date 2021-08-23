<?php


namespace Alura\Banco\Modelo;

class Pessoa
{
  protected $nome;
  private $cpf;

  protected function validaNomeTitular(string $nome)
  {
    if(strlen($nome) < 5)
    {
      echo "Nome precisa ter 5 caracteres\n";
      exit();
    }
    else
    {

    }
  }
  public function __construct(string $nome,Cpf $cpf)
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
  }


  public function recuperarCpf():string
  {
    return $this->cpf->recuperarNumero();
  }


  public function recuperarNome():string
  {
    return $this->nome;
  }
}

  ?>
