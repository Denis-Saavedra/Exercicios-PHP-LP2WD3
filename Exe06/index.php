<?php
require("circulo.php");

echo '
<form action="" method="post">
    Raio:  <input required min="1" value="1" type="number" name="raio" /><br />
    <input type="submit" name="submit" value="Calcular" />
</form>
';

if (!empty($_POST)) {
    $circulo = new Circulo($_POST['raio']);

    echo "<br>Raio = ".$circulo->get_raio();
    echo "<br>Area = ".$circulo->calcula_area();
    echo "<br>Circuferência = ".$circulo->calcula_circuferencia();
}

?>