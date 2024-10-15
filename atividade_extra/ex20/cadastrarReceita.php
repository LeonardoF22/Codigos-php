<?php
require 'conexao.php';
$receitas = $conn -> query("SELECT * FROM tb_categoriasreceitas") -> fetchAll(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomeReceita = $_POST['receita'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];

    $stmt = $conn -> prepare("INSERT INTO tb_receitas (nome_receita, valor, id_categoriaReceita) VALUES (?, ?, ?)");
    $stmt -> execute([$nomeReceita, $valor, $tipo]);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Receitas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Cadastro de receita</h2>
                        <form action="cadastrarReceita.php" method="post">
                            <div class="mb-3">
                                <label for="receita" class="form-label">Receita:</label>
                                <input type="text" name="receita" id="receita" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo:</label>
                                <select class="form-control" name="tipo">
                                <?php
                                
                                    foreach ($receitas as $receita) {
                                        echo "<option value='" . $receita['id_categoriaReceita'] . "'>" . $receita['categoriaReceita'] . "</option>";
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor:</label>
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