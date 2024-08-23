<?php
$num = $_POST['num'];
$a = 0;
$b = 1;
 
echo "<h3>Sequência de Fibonacci para $num etapas</h3><br>";
echo "<p>$a, $b";
for ($i = 2; $i < $num; $i++){
    $temp = $a + $b;
    echo ", $temp";
    $a = $b;
    $b = $temp;
}
echo "</p>";