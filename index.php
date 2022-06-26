<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contas bancarias</title>
</head>
<body>

<?php

include_once('poupanca.php');
include_once('corrente.php');

$c1 = new /*Escolha entre conta Poupança ou Corrente*/Corrente(100, 2586, 5000, 500);
$c1->depositar(/*Desposite um valor alterando um numero*/1800);
$c1->saque(/*Realize o saque alterando o numero*/2500);

echo $c1->getDetalhes();

?>

</body>
</html>
