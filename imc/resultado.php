<?php 
$sexo = $_POST['sexo'];

session_start();
$name = $_SESSION['name'];
$peso = $_SESSION['peso'];
$altura = $_SESSION['alt'];
$status = 'oi';
$imc = 'oi';

echo $name . '<br>'. 
'Sexo: ' . $sexo . '<br>' . 
'Peso: ' . $peso . 'kg' . '<br>' . 
'Altura: '.  $altura . 'm' . '<br>' . 
'IMC: ' . $imc . '<br>' . 
'Status: ' . $status . '<br>';
// $numero = number_format($numero, 2, ',','.');
?>
<meta charset="UTF-8" />
<a href="index.html">Voltar para a página inicial.</a>