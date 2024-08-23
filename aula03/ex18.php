<?php
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];

echo "<h3>Verificação de alistamento</h3>";

if($sexo == "M" && $idade >= 18){
    echo "$nome, você já pode realizar seu alistamento militar";
} else if($sexo == "M" && $idade < 18){
    echo "$nome, você só pode se alistar quando completar 18 anos";
} else {
    echo "$nome, você não pode se alistar";
}
?>