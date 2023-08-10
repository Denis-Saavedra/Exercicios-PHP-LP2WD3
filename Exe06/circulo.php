<?php

class Circulo {
    function __construct ($raio) {
        $this->raio = $raio;
    }

    function calcula_area () {
        return $this->raio*$this->raio*3.14;
    }

    function calcula_circuferencia () {
        return 2*3.14*$this->raio;
    }

    function get_raio () {
        return $this->raio;
    }
}

?>