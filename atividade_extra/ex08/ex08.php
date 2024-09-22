<?php
$cpf = $_POST['cpf'];
$soma = 0;
// Verificando se o primeiro digito verificador está correto
$cont1 = 10;
for($i = 0; $i <= 8; $i++){
    $mult = $cpf[$i] * $cont1;
    $soma += $mult;
    //echo "$cont1 x" . $cpf[$i]. "<br>";
    $cont1--;
    
}
$resto1 = $soma % 11;
if($resto1 < 2){
    if($cpf[9] == 0){
        $verificandoPrimeiroDig = true;
    } else {
        $verificandoPrimeiroDig = false;
    }
} else {
    $pd = 11 - $resto1;
    if($cpf[9] == $pd){
        $verificandoPrimeiroDig = true;
    } else{
        $verificandoPrimeiroDig = false;
    }
}

// Verificando se o segundo digito verificador está correto
$cont2 = 11;
$soma = 0;
for($i = 0; $i <= 9; $i++){
    $mult = $cpf[$i] * $cont2;
    $soma += $mult;
    //echo "$cont2 x" . $cpf[$i]. "<br>";
    $cont2--;
}
$resto2 = $soma % 11;
if($resto2 < 2){
    if($cpf[10] == 0){
        $verificandoSegundoDig = true;
    } else {
        $verificandoSegundoDig = false;
    }
} else {
    $pd2 = 11 - $resto2;
    if($cpf[10] == $pd2){
        $verificandoSegundoDig = true;
    } else {
        $verificandoSegundoDig = false;
    }
}

//Exibindo se o CPF é valido ou não
if($verificandoPrimeiroDig && $verificandoSegundoDig){
    echo "<p>O cpf: $cpf é valido!</p>";
} else {
    echo "<p>O cpf: $cpf é invalido!</p>";
}


?>