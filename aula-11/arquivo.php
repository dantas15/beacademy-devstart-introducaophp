<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'Maça' . PHP_EOL);
fwrite($arquivo, 'Melancia' . PHP_EOL);
fwrite($arquivo, 'Caneta' . PHP_EOL);

fclose($arquivo);

