<?php
$data_recebida = $_POST['datanasc'];
//Separando a data recebida em partes
//$partes[0] = dia , $partes[1] = mês, $partes[2] = ano
$partes = explode('/', $data_recebida);
$ano_nascimento = $partes[2];
$idade = 2024 - $ano_nascimento;
if($idade >= 18){
    echo "<p>Você é maior de idade!</p>";
} else {
    echo "<p>Você é menor de idade!</p>";
}
?>
