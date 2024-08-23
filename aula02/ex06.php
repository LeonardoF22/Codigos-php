<?php
$idade = $_POST['txtnum'];

echo "<h3>Clube do Conhecimento</h3>";

if ($idade >= 60){
    echo "Receba a pulseira VIP para Idoso!<br>";
} elseif ($idade >= 18) {
    echo "Receba a pulseira NORMAL!<br>";
} else {
    echo "Receba a pulseira para MENORES!<br>";
}

echo "Programa encerrado"



?>