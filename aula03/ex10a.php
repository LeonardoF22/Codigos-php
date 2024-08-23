<?php
$num = $_POST['num'];
$i = 1;
echo "<h3>Gerador de Números</h3><br>";
while($i <= $num){
    echo "$i <br>";
    $i += 2;
}
echo "<p>Sequência encerrada</p>";
?>