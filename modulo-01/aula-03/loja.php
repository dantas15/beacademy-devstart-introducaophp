<?php

$produto1 = "Calça";
$produto1preco = 74.99;
$produto1tamanho = "40";

$produto2 = "Camisa";
$produto2preco = 64.99;
$produto2tamanho = "P";

$produto3 = "Sapato";
$produto3preco = 149.99;
$produto3tamanho = "41";

$total = $produto1preco + $produto2preco + $produto3preco;
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrinho LojaPHP</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Produto</th>
        <th scope="col">Tamanho</th>
        <th scope="col">Preço</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td> <?= $produto1 ?></td>
        <td><?= $produto1tamanho ?></td>
        <td><?= $produto1preco ?></td>
    </tr>
    <tr>
        <td> <?= $produto2 ?></td>
        <td><?= $produto2tamanho ?></td>
        <td><?= $produto2preco ?></td>
    </tr>
    <tr>
        <td> <?= $produto3 ?></td>
        <td><?= $produto3tamanho ?></td>
        <td><?= $produto3preco ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>