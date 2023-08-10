<?php
require("produto.php");

$produto = new Produto("Queijo Prata", 28.00);
$arrayProdutos[] = $produto;

$produto = new Produto("Queijo Cheddar", 42.00);
$arrayProdutos[] = $produto;

$produto = new Produto("Queijo Bri", 112.00);
$arrayProdutos[] = $produto;

$produto = new Produto("Queijo Mussarela", 25.50);
$arrayProdutos[] = $produto;

echo "

<style>
table, th, td {
  border:1px solid black;
}
</style>

<table style='width:100%'>
    <tr>
        <th>Produto</th>
        <th>Preço (Kg)</th>
    </tr>
";

for ($i = 0; $i < 4; $i++) {
    echo $arrayProdutos[$i]->exibe();
}

echo "</table>";


?>