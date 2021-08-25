<?php

namespace Alura\Banco\modelo\Conta;

require_once "/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Pessoa.php";//Gambiarra
require_once '/home/gestor/Área de Trabalho/Formação PHP/1LinguagemPHP/OOPHP/src/Modelo/Autenticavel.php';
//use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Autenticavel;


class Titular extends Pessoa implements Autenticavel

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

    public function Autenticar(string $senha):bool
    {
      return $senha === 'abcd';
    }

}






 ?>
