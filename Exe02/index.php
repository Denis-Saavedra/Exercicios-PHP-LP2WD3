<?php
require("retangulo.php");

$retangulo = new Retangulo(2,4);

echo "<br>Largura = ".$retangulo->get_largura();
echo "<br>Altura = ".$retangulo->get_altura();
echo "<br>Area = ".$retangulo->calcula_area();
echo "<br>Perimetro = ".$retangulo->calcula_perimetro();

?>