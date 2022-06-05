<?php

declare(strict_types=1);

function mostrarNome(array $nomes): void
{
    foreach ($nomes as $cadaNome) {
        echo "Nomes:" . $cadaNome . PHP_EOL;

    }

}

mostrarNome(['Nome1', 'Nome 2', 'Adamastor']);
