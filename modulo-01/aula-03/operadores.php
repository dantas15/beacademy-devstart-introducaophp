<?php

// Operadores aritméticos
$soma = 2000;

$soma = $soma + 200; /* mesmo que: */ $soma += 200;

// shorthand para somar apenas 1:
$soma++; /* mesmo que:*/ $soma += 1; /* ou */ $soma = $soma + 1;

// Operadores lógicos

$soma = 10;

$eIgualA10 = $soma == 10;

// utilizando operador ternário:
$naoEstaDefinido = isset($naoEstaDefinido) ? $naoEstaDefinido : 10; // Atribuindo um valor padrão se a variável não estiver definida

//shorthand para a operação acima:
$estaDefinido = $naoEstaDefinido ?? 10;

