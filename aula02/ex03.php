<?php
$num = $_GET['txtnum'];
$porcentagem = ($num*0.15);
$vf = $num - $porcentagem;

echo "<h3>Calcula porcentagem</h3>";
echo "15% de $num é: $porcentagem";
echo "<br>Valor com desconto: R$$vf";
?>