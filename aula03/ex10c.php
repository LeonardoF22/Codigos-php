<?php
$num = $_POST['num'];
$a = 0;
$b = 1;
$piso = 1; 
echo "<h3>Sequência de Fibonacci para $num etapas</h3><br>";
echo "<p>$a, $b";
for ($i = 2; $i < $num; $i++){
    $temp = $a + $b;
    echo ", $temp";
    $piso += $temp**2;
    $a = $b;
    $b = $temp;
    
}
echo "<br>Para $num etapas, necessitamos de $piso pisos.";
echo "</p>";