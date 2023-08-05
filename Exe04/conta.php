<?php

class Conta {
    function __construct ($titular, $numero, $saldo) {
        $this->titular = $titular;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    function conta_info () {
        return "Titular = ".$this->titular."<br>Número da Conta = ".$this->numero."<br>Saldo = ".$this->saldo;
    }

    function deposito ($money) {
        $this->saldo = $this->saldo + $money;
        return "<br><br>------Foi realizado um Deposito------<br>Saldo Atual = ".$this->saldo."<br><br>";
    }

    function saque ($money) {
        $this->saldo = $this->saldo - $money;
        return "<br><br>------Foi realizado um Saque------<br>Saldo Atual = ".$this->saldo."<br><br>";
    }
    
}

?>