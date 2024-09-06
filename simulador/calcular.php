<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de emprestimo</title>
</head>
<body>
    <h2>Seja bem vindo ao MyBank</h2>
    <h3>Resultado da Simulação</h3>

<?php
    $cliente = $_POST['cliente']; // 's' para sim ou 'n' para não
    $score = $_POST['score']; // Score do serasa
    $valor = $_POST['valor']; // Valor do emprestimo
    $parcelas = $_POST['parcelas']; // Numero de parcelas
    $seguro = isset($_POST['seguro'])?49.90:0; // Quer seguro ou não
    
    if($cliente == "s"){
        $juros = 0.03;
        $valorCadastro = 0;
    } else {
        $valorCadastro = 35;
        switch ($score){
            case $score <= 299:
                $juros = 0.20;
                break;
            case $score <= 499:
                $juros = 0.15;
                break;
            case $score <= 699:
                $juros = 0.10;
                break;
            case $score <= 1000:
                $juros = 0.05;
                break;
        }
    }

    $valor += $valor * ($juros * $parcelas) + $seguro + $valorCadastro;
    $valor_total = $valor + $valor * 0.038;
    $valorParcela = $valor_total / $parcelas;
    ?>
    <p>Valor das parcelas: R$<?= number_format($valorParcela, 2, ",", ".")?></p>
    <p>Quantidade de parcelas: <?= $parcelas?></p>
    <p>Taxa de juros: <?= $juros*100 ?>%</p>
    <p>Valor total CET: R$<?= number_format($valor_total, 2, ",", ".") ?></p>
</body>
</html>