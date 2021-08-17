<?php


class /*TIPO*/Conta
{


    private $titular;
    private  $saldo;
    public static $num_contas;//Metodo estatico

//Metodo função dentro de uma classe

    public function __construct(titular $titular)//Nova instacia é criada
    {
      echo "Criando Nova Conta\n";
      $this->titular = $titular;
      $this->saldo = 0;

      self::$num_contas++;

    }
    public function __destruct()//Nova instancia é destruída
    {
      self::$num_contas--;
    }
    public function sacar(float $valorAsacar)
    {
      if($valorAsacar > $this->saldo)
      {
        echo "Saldo Indisponivel";
      }
      else
      {
      $this->saldo  -= $valorAsacar;

      }
    }


    public function depositar(float $valorAdepositar):void
    {
      if($valorAdepositar < 0)
      {
        echo "Use a função sacar";
      }
      else
      {
        $this->saldo = $this->saldo + $valorAdepositar;
      }
    }

    public function transferir(float $valorAtransferir, Conta $contadestino):void
    {
      if($this->saldo < $valorAtransferir)
      {
        echo "Impossible";
      }
      else
      {
        $this->sacar($valorAtransferir);
        $contadestino->depositar($valorAtransferir);
      }
    }

    public function recuperarSaldo():float
    {
      return $this->saldo;
    }

    public function recuperarNomeTitular()
    {
      return $this->titular->recuperarNome();
    }

    public function recuperarCpfTitular()
    {
      return $this->titular->recuperarCpf();
    }

    public static function retornarnumcontas():int
    {
      return self::$num_contas;
    }
}




 ?>
