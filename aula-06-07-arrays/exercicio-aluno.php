<?php
$alunos = [
    'aluno 1' => [
        'nome' => 'Luiz',
        'email' => 'luiz@teste.com',
        'telefone' => '89898989898',
    ],
    'aluno 2' => [
        'nome' => 'João',
        'email' => 'joao@teste.com',
        'telefone' => '99999999999'
    ],
];
?>
<table>
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
    </thead>
    <tbody>
    <?php

    foreach ($alunos as $aluno)
        echo '
            <tr>
                <td>' . $aluno['nome'] . '</td>
                <td>' . $aluno['email'] . '</td>
                <td>' . $aluno['telefone'] . '</td>
            </tr>';
    ?>
    </tbody>
</table>