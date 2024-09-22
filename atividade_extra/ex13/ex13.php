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
        <input type="submit" value="" name="enviar">
    </form>
    
    <?php
        $aleatorio = random_int(1,100);
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['enviar'])){
            $num = $_POST['num'];
            echo $aleatorio;
            if($num == $aleatorio){
                echo "<h4>Parabéns você acertou!</h4>";
            } else if($num > $aleatorio){
                echo "<h4>O número aleatório é menor que o palpite!</h4>";
            } else {
                echo "<h4>O número aleatório é maior que o palpite!</h4>";
            }
        }

    ?>
</body>
</html>