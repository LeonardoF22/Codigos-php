<?php
$numI = $_POST['numI'];
$numF = $_POST['numF'];

echo "<h3>Geração de números sequênciais</h3>";

for($numI; $numI <= $numF; $numI++){
    echo "$numI <br>";
}

?>