<?php
$num = $_POST['num'];
echo "<h3>Gerador de Números</h3><br>";
if($num>0){ 
    for($i=0; $i<=$num;$i+=2){
        echo "$i <br>";
    }
} else {
    for($i=$num; $i<=0; $i++){
        echo "$i <br>";
    }
}
?>