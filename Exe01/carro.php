<?php 

class Carro {
    // Atributos da Classe
    private $marca;
    private $modelo;
    private $ano;

    // Funções da Classe
    function __construct ($marca, $modelo, $ano) {
        if ($ano < 2008) {
            $this->marca = "Ano";
            $this->modelo = "não";
            $this->ano = "aceito!";
        } else {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }
    }

    function set_marca ($marca) {
        $this->marca = $marca;
    }

    function set_modelo ($modelo) {
        $this->modelo = $modelo;
    }

    function set_ano ($ano) {
        if ($ano < 2008) {
            echo "Ano não permitido!";
        } else {
            $this->ano = $ano;
        }
    }

    function get_marca () {
        return $this->marca;
    }

    function get_modelo () {
        return $this->modelo;
    }

    function get_ano () {
        return $this->ano;
    }
}

?>