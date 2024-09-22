<?php
$velocidade = $_POST['velocidade'];
$distancia = $_POST['distancia'];
$tempo = $distancia / $velocidade;
echo "<p>A viagem de $distancia Km vai demorar $tempo hora(s) indo a uma velocidade de $velocidade Km/h!</p>";

?>