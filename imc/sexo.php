<?php
$peso = $_POST['peso'];

session_start();
$_SESSION['peso'] = $peso;
$name = $_SESSION['name'];

echo 'Olá ' . $name;
?>

<meta charset="UTF-8" />
<link rel="stylesheet" href="style.css" />
<form id="form" action="resultado.php" method="post">
    <fieldset>
        <legend>Selecione seu sexo:</legend>
        <input type="radio" id="masc" value="Masculino" name="sexo" /> <label for="masc">Masculino</label><br>
        <input type="radio" id="fem" value="Feminino" name="sexo" /><label for="fem">Feminino</label>
    </fieldset>
    <br>
    <button type="submit">Avançar</button>
</form>