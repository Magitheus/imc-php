<meta charset="UTF-8" />
<?php
//  print_r($_POST);

//  $name= $_POST['name'];

//  session_start();
//  $_SESSION['nome'] = $name;
//  $_SESSION['alt'] = $alt;

//  echo 'Olá '. $name

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IMC</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form id="form" action="resultado.php" method="post">
        <label for="alt">
            Digite a sua altura:
            <input id="alt" name="alt" type="text" />
        </label>
        <button type="submit"><a href="peso.php">ir</a></button>
    </form>
</body>

</html>