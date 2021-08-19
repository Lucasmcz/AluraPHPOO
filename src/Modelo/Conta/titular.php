<?php

namespace Alura\Banco\modelo\Conta;

require_once 'cpf.php';
require_once 'pessoa.php';
class Titular extends Pessoa

{

    private Endereco $endereco;



    public function __construct(CPF $cpf,string $nome, Endereco $endereco)
    {
      parent::__construct($nome,$cpf);
      $this->endereco = $endereco;
    }

    public function recuperarCpf():string
    {
      return $this->cpf->recuperarNumero();
    }


    public function recuperarNome():string
    {
      return $this->nome;
    }

    public function retornarenderco():endereco
    {
      return $this->endereco;
    }

}






 ?>
