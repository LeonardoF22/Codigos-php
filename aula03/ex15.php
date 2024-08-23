<?php
$letras = ['A', 'B', 'C', 'D', 'E'];
$letra = $_POST['letra'];

echo "<h3>Array alterado</h3>" ;
for($i = 0; $i < 5; $i++){
    if($letras[$i] == $letra){
        $letras[$i] = "X";
    }
    echo "$letras[$i]";
}

?>