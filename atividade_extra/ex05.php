<?php
$palavra = $_POST['palavra'];
$palavrainv = strrev($palavra);

echo "<h3>Verificador de palindromos</h3>";
echo "<p>A palavra $palavra inversa é $palavra</p>";
if($palavra == $palavrainv){
    echo "<p>É palindromo</p>";
} else {
    echo "<p>Não é palindromo</p>";
}

?>