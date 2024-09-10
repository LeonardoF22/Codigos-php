<?php
$frase = $_POST['frase'];
$quantidade = str_word_count($frase);
echo "<h2>Contador de palavras</h2>";
echo "<p>A frase $frase possui $quantidade palavras<p>";


?>