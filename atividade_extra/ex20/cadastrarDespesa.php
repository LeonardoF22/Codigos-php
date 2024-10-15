<?php
require 'conexao.php';
$despesas = $conn -> query("SELECT * FROM tb_categoriasdespesas") -> fetchAll(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $despesa = $_POST['despesa'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];

    $stmt = $conn -> prepare("INSERT INTO tb_despesas (nome_gasto, valor, id_categoriaDespesa) VALUES (?, ?, ?)");
    $stmt -> execute([$despesa, $valor, $tipo]);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Despesas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Cadastro de Despesa</h2>
                        <form action="cadastrarDespesa.php" method="post">
                            <div class="mb-3">
                                <label for="Despesa" class="form-label">Despesa:</label>
                                <input type="text" name="despesa" id="despesa" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label form="despesa" class="form-label">Tipo:</label>
                                <select class="form-control" name="tipo">
                                <?php
                                
                                    foreach ($despesas as $despesa) {
                                        echo "<option value='" . $despesa['id_categoriaDespesa'] . "'>" . $despesa['categoriaDespesa'] . "</option>";
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor</label>
                                <input type="text" name="valor" id="valor" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>