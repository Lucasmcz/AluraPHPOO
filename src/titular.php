<?php
require_once 'cpf.php';

class Titular

{
    private string $nome;
    private $cpf;

    private function validaNomeTitular(string $nome)
    {
      if(strlen($nome) < 5)
      {
        echo "Nome precisa ter 5 caracteres\n";
        exit();
      }
      else
      {
        echo "Ok";
      }
    }

    public function __construct(CPF $cpf,string $nome)
    {
      $this->cpf = $cpf;
      $this->validaNomeTitular($nome);
      $this->nome = $nome;
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
