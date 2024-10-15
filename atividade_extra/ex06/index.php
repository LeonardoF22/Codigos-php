<?php
function gerarCombinacao($tamanho, $num, $caractere) {
    $letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeros = '0123456789';
    $simbolos = '!@#$&*/';

    $caracteres = '';
    $combinacao = '';

    // Adiciona ao conjunto de caracteres dependendo da escolha do usuário
    if ($num == 'on') {
        $caracteres .= $numeros;
        // Garante a inclusão de pelo menos um número
        $combinacao .= $numeros[rand(0, strlen($numeros) - 1)];
        $tamanho--;
    }
    if ($caractere == 'on') {
        $caracteres .= $simbolos;
        // Garante a inclusão de pelo menos um caractere especial
        $combinacao .= $simbolos[rand(0, strlen($simbolos) - 1)];
        $tamanho--;
    }

    // Sempre inclui letras
    $caracteres .= $letras;
    if ($tamanho > 0) {
        // Preenche o restante da combinação
        for ($i = 0; $i < $tamanho; $i++) {
            $combinacao .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
    }

    // Embaralha a combinação final
    return str_shuffle($combinacao);
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tamanho = $_POST['quantidade'];
    $num = isset($_POST['numeros']) ? "on" : "off";
    $caractere = isset($_POST['caracteres']) ? "on" : "off";

    $senha = gerarCombinacao($tamanho, $num, $caractere);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 06</title>
</head>
<body>
    <h3>Gerador de Senha</h3>
    <form action="index.php" method="POST">
        <label for="quantidade">Tamanho da senha: </label>
        <input type="number" name="quantidade" required><br>
        
        <h4>Deseja incluir:</h4>
        <label for="numeros">Numeros: </label>
        <input type="checkbox" name="numeros" ><br>
        <label for="caracteres">Caracteres especiais: </label>
        <input type="checkbox" name="caracteres"><br><br>
        <input type="submit" value="Gerar Senha">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "<h4>Senha gerada: $senha</h4>";
        }
    ?>
</body>
</html>