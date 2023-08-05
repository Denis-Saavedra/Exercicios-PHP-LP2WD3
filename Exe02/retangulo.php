<?php

class Retangulo {
    function __construct ($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    function calcula_area () {
        return $this->largura*$this->altura;
    }

    function calcula_perimetro () {
        return ($this->largura+$this->altura)*2;
    }

    function get_largura () {
        return $this->largura;
    }

    function get_altura () {
        return $this->altura;
    }
}

?>