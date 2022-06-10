<?php

$ano = '';
$mes = '';
$dia = '';

for ($i = 1; $i <= 31; $i++) {
    $dia .= '<option> ' . $i . '</option>';
}

for ($i = 1; $i <= 12; $i++) {
    $mes .= '<option> ' . $i . '</option>';
}

for ($i = 2022; $i >= 1900; $i--) {
    $ano .= '<option> ' . $i . '</option>';
}
?>

<select>
    <option selected>Selecione um dia</option>
    <?= $dia ?>
</select>

<select>
    <option selected>Selecione um mes</option>
    <?= $mes ?>
</select>

<select>
    <option selected>Selecione um ano</option>
    <?= $ano ?>
</select>
