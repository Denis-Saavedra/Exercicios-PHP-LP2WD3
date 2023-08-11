<?php
require("retangulo.php");

echo '
<form action="" method="POST">
    <input type="number" name="largura" value="1" min="1"/><br>
    <input type="number" name="altura" value="1" min="1"/><br>
    <input type="submit" value="Enviar"/>
</form>
';

if (!empty($_POST)) {
    $retangulo = new Retangulo($_POST['largura'],$_POST['altura']);

    echo "<br>Largura = ".$retangulo->get_largura();
    echo "<br>Altura = ".$retangulo->get_altura();
    echo "<br>Area = ".$retangulo->calcula_area();
    echo "<br>Perimetro = ".$retangulo->calcula_perimetro();
}

?>