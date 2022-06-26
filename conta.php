<?php

class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getDetalhes(){
        return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br />";
    }

    public function depositar($valor){
        $this-> saldo += $valor;
        echo "Depósito de: {$valor} | Saldo atual: {$this->saldo}<br />";
    }
}