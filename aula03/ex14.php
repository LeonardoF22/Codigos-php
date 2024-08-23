<?php
$paises = array("Brasil", "Chile", "Equador", "Guatemala", "México", "Moçambique", "Uruguai");
echo "Paises na lista: \n";
for($i = 0; $i < 7; $i++){
    if($i % 2 == 0){
        echo "$paises[$i]: Indice -> $i \n";
    }
}
?>