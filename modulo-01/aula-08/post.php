<form method="post">
    <label for="nome">Nome</label>
    <input id="nome" type="text" name="nome" placeholder="Insira seu nome">

    <button>Enviar</button>
</form>

<?php

if ($_POST) {
    echo  'Nome: ' . $_POST["nome"];
}

