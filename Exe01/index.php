<?php
require("carro.php");

// Criação de um objeto do tipo Carro
$carro1 = new Carro("Audi", "A3", "2023");
$carro2 = new Carro("Volkswagen", "Fusca", "2007");

// Exibe os objetos
echo "<br> Carro[01] = [".$carro1->get_marca()."] [".$carro1->get_modelo()."] [".$carro1->get_ano()."]";
echo "<br><br>";
echo "<br> Carro[02] = [".$carro2->get_marca()."] [".$carro2->get_modelo()."] [".$carro2->get_ano()."]";
?>