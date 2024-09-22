<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex13</title>
</head>
<body>
    <h3>Jogo de adivinhação</h3>
    <form method="POST" action="ex13.php">
        <label>Digite um numero:</label>
        <input type="number" name="num"><br><br>
        <input type="submit" value="Chutar" name="enviar">
    </form>
    
    <?php
    //Cria uma sessão para guardar o numero aleatorio
        session_start();
        if (!isset($_SESSION['numero'])){
            $_SESSION['numero'] = random_int(1,100);
        }
        //Verificando se o botão foi clicado
        if (isset($_POST['enviar'])){
            $num = $_POST['num'];
            if($num == $_SESSION['numero']){
                //Caso o usuario acerte o numero a sessão é encerrada e outro numero aleatório é selecionado
                echo "<h4>Parabéns você acertou!</h4>";
                session_destroy();
            } else if($num > $_SESSION['numero']){
                echo "<h4>O número aleatório é menor que o palpite!</h4>";
            } else {
                echo "<h4>O número aleatório é maior que o palpite!</h4>";
            }
        }
    ?>
</body>
</html>