<?php
$pont1 = $_POST['partida1'];
$pont2 = $_POST['partida2'];

$mult = $pont1 * $pont2;

if ($mult >= 50) {
    echo "Pontuação total $mult";
} else {
    echo "Pontuação insuficiente, é necessario intensificar o treino!";
}

?>