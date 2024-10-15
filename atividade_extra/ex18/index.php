<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $peso = $_POST['peso'];
    $regiao = $_POST['estado'];
    switch ($regiao){
        case 'norte':
            $frete = 25;
            break;
        case 'sudeste':
            $frete = 10;
            break;
        case 'nordeste':
            $frete = 20;
            break;
        case 'centro-oeste':
            $frete = 15;
            break;
        case 'sul':
            $frete = 12;
    }
    $vf = $peso * $frete;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex18</title>
</head>
<body>
    <h3>Calculo de frete</h3>
    <form action="index.php" method="POST">
        <label for="estado">Estado de destino</label>
        <select name="estado">
            <option value="norte">Acre</option>
            <option value="norte">Amapá</option>
            <option value="norte">Amazonas</option>
            <option value="norte">Pará</option>
            <option value="norte">Rondônia</option>
            <option value="norte">Roraima</option>
            <option value="norte">Tocantins</option>
            <option value="nordeste">Alagoas</option>
            <option value="nordeste">Bahia</option>
            <option value="nordeste">Ceatá</option>
            <option value="nordeste">Maranhão</option>
            <option value="nordeste">Paraíba</option>
            <option value="nordeste">Piauí</option>
            <option value="nordeste">Pernambuco</option>
            <option value="nordeste">Rio Grande do Norte</option>
            <option value="nordeste">Sergipe</option>
            <option value="centro-oeste">Distrito Federal</option>
            <option value="centro-oeste">Goiás</option>
            <option value="centro-oeste">Mato Grosso</option>
            <option value="centro-oeste">Mato Grosso do Sul</option>
            <option value="sudeste">Espirito Santo</option>
            <option value="sudeste">Minas Gerais</option>
            <option value="sudeste">Rio de Janeiro</option>
            <option value="sudeste">São Paulo</option>
            <option value="sul">Paraná</option>
            <option value="sul">Rio Grande do Sul</option>
            <option value="sul">Santa Catarina</option>
        </select><br><br>

        <label for="peso">Peso do produto</label>
        <input type="text" name="peso"><br><br>

        <input type="submit" value="Calcular frete">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "<h4>Valor do frete: R$$vf</h4>";
        }

    ?>
</body>
</html>