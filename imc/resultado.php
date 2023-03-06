<?php 
$sexo = $_POST['sexo'];

session_start();
$name = $_SESSION['name'];
$peso = $_SESSION['peso'];
$altura = $_SESSION['alt'];

$i = $peso/(pow($altura, 2));
$imc = number_format($i, 2, ',','.');

switch ($sexo) {
    case 'Masculino':
        if ($imc <= 20.7) {
            $status = 'abaixo do peso';
        } elseif ($imc <= 26.4) {
            $status = 'no peso normal';
        } elseif ($imc <= 27.8) {
            $status = 'marginalmente acima do peso';
        } elseif ($imc <= 31.1) {
            $status = 'acima do peso ideal';
        } else {
            $status = 'obeso';
        }
        break;

    case 'Feminino':
        if ($imc <= 19.1) {
            $status = 'abaixo do peso';
        } elseif ($imc <= 25.8) {
            $status = 'no peso normal';
        } elseif ($imc <= 27.3) {
            $status = 'marginalmente acima do peso';
        } elseif ($imc <= 32.3) {
            $status = 'acima do peso ideal';
        } else {
            $status = 'obeso';
        }
        break;
}


echo $name . '<br>'. 
'Sexo: ' . $sexo . '<br>' . 
'Peso: ' . $peso . 'kg' . '<br>' . 
'Altura: '.  $altura . 'm' . '<br>' . 
'IMC: ' . $imc . '<br>' . 
'Status: ' . $status . '<br>';
?>
<meta charset="UTF-8" />
<a href="index.html">Voltar para a página inicial.</a>