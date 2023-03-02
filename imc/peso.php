<?php
    $alt = $_POST['alt'];

    session_start();
    $_SESSION['alt'] = $alt;
    $name = $_SESSION['name'];

    echo 'Olá ' . $name;
?>

<meta charset="UTF-8" />
<form id="form" action="sexo.php" method="post">
    <label for="peso">
        Digite o seu peso:
        <br>
        <input id="peso" name="peso" type="number" />
    </label>
    <br>
    <button type="submit">Avançar</button>
</form>