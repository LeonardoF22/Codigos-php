<?php
$t = $_POST['pt'];
$qt = $_POST['qt'];
$rz = $_POST['rz'];

echo "<h3>Progressão Geométrica</h3>";

for($i = 1; $i <= $qt; $i++){
    echo "a$i ... $t <br>";
    $t = $t * $rz;
}
?>