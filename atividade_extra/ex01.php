<?php
$val = $_POST['valor'];
$gorjeta = $_POST['porcentagem'];
$vf = $val*$gorjeta/100;
echo "Valor pago: R$$val<br>";
echo "Gorjeta de $gorjeta%<br>";
echo "Valor da gorjeta R$$vf";
?>