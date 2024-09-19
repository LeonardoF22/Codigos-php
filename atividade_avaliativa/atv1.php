<?php
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$imc = $peso / ($altura*$altura);

echo "<p>Seu peso é: $peso</p>";
echo "<p>Sua altura é: $altura</p>";
echo "<p>Seu IMC é: $imc</p>";

switch ($imc){
    case $imc <= 18.5:
        echo "<p>Abaixo do peso</p>";
        break;
    case $imc <= 24.9:
        echo "<p>Peso ideal (parabéns)</p>";
        break;
    case $imc <= 29.9:
        echo "<p>Levemente acima do peso</p>";
        break;
    case $imc <= 34.9:
        echo "<p>Obesidade Grau 1</p>";
        break;
    case $imc <= 39.9:
        echo "<p>Obesidade grau 2 (severa)</p>";
        break;
    default:
        echo "<p>Obesidade grau 3 (mórbida)";
}


?>