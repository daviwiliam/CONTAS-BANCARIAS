<?php

include_once('conta.php');

class Corrente extends Conta{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite){
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function saque($valor){
        if(($this->saldo + $this->limite) >= $valor):
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<br />";
        else:
            echo "Sauqe não autorizado de {$valor} | Saldo atual: {$this->saldo} | Limite: {$this->limite}<br />";
        endif;    
    }
}