<?php

$display = '';

for ($i = 2022; $i >= 1900; $i--) {
    $display .= '<option> ' . $i . '</option>';
}
?>

<select>
    <option selected>Selecione um ano</option>
    <?= $display ?>

</select>