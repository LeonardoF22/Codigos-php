<?php
$frutas = array("Goiaba", "Morango", "Banana", "Melancia", "Abacate", "Laranja", "Cereja");
for($i = 0;$i <= 6; $i++){
    if($i % 2 != 0){
        echo "$frutas[$i]: indice -> $i";
        echo "\n";
    }
}
?>