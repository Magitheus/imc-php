<?php

    $name = $_POST['name'];

    session_start();
    $_SESSION['name'] = $name;

    echo 'Olá ' . $name;
?>

<meta charset="UTF-8" />
<form id="form" action="peso.php" method="post">
    <label for="alt">
        Digite a sua altura:
        <br>
        <input name="alt" type="number" min="0" max="2" step=".01">
    </label>
    <br>
    <button type="submit">Avançar</button>
</form>