<?php

namespace Alura\Banco\modelo;

class Endereco
{


  private string $cidade;
  private string $bairro;
  private string $rua;
  private string $numero;

public function __construct(string $cidade,string $bairro,string $rua,string $numero)
  {
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;
  }

  public function getcidade():string
  {
    return $this->cidade;
  }

  public function getbairro():string
  {
    return $this->bairro;
  }

  public function getrua():string
  {
    return $this->rua;
  }

  public function getnumero():string
  {
    return $this->numero;
  }
}



 ?>
