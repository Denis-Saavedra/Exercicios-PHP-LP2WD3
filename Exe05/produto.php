<?php

class Produto {
    function __construct ($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    function exibe () {
        return "
            <tr>
                <td>".$this->nome."</td>
                <td>R$".$this->preco."</td>
            </tr>
        ";
    }
    
}

?>