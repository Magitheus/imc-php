<?php
$exp = $_POST['exp'];
session_start();
// print_r($_SESSION);
$base1 = $_SESSION['base1'];
$base2 = $_SESSION['base2'];

$pot1 = pow($base1, $exp);
$pot2 = pow($base2, $exp);

echo $base1 . '<sup>' . $exp . '</sup> = ' . $pot1 . '<br/>' .
    $base2 . '<sup>' . $exp . '</sup> = ' . $pot2;
?>