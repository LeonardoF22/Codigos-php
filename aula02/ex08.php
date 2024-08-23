<?php
$temp = $_POST['txtnum'];
if ($temp == 0) {
    echo "Temperatura neutra<br>";
} elseif ($temp < 0) {
    echo "Frio intenso detectado!<br>";
} else {
    echo "Clima ameno e agradavel!<br>";
}
echo "Programa encerrado";
?>