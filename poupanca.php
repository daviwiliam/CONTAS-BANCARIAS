<?php

include_once('conta.php');

class Poupanca extends Conta{
    public function saque($valor){
        if($this->saldo >= $valor):
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo Atual: {$this->saldo}<br />";
        else:
            echo "Saque não autorizado | Saldo atual: {$this->saldo}<br />";
        endif;        
    }
}

