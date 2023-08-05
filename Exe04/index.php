<?php
require("conta.php");

$conta = new Conta("Denis Saavedra", 0415, 8000);

echo $conta->conta_info();

echo $conta->deposito(100);

echo $conta->saque(1000);

echo $conta->deposito(7589);

echo $conta->saque(9999);

echo $conta->deposito(1050);

echo $conta->saque(189);

?>