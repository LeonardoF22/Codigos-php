<?php
session_start();
include 'conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $arquivo = $_FILES['imagem'];

    if ($arquivo['error'] === UPLOAD_ERR_OK){
        $nomeArquivo = uniqid() . "-" . $arquivo['name'];
        move_uploaded_file($arquivo['tmp_name'] , "uploads/$nomeArquivo");

        $stmt = $conn -> prepare ("INSERT INTO produtos (nome, descricao, preco, quantidade, imagem) VALUES (?, ?, ?, ?, ?)");
        $stmt -> execute([$nome, $descricao, $preco, $quantidade, $nomeArquivo]);
        header("Location: lista_produtos.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Cadastro de Produtos</h2>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome: </label>
                                <input type="text" name="nome" id="nome" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição: </label>
                                <input type="text" name="descricao" id="descricao" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="preco" class="form-label">Preço: </label>
                                <input type="text" name="preco" id="preco" class="form-control" placeholder="00,00" required>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">Quantidade: </label>
                                <input type="number" name="quantidade" id="quantidade" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="imagem">Imagem: </label>
                                <input type="file" name="imagem" class="form-control" accept=".png .jpg" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>