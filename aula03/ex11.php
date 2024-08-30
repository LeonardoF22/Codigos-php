<?php
$nomes = array("Amanda", "Bruno", "Camila");
for($i = 0; $i <= 2; $i++){
    if($nomes[$i] == "Amanda" || $nomes[$i] == "Camila"){
        echo $nomes[$i];
        echo "\n";
    }
}

?>