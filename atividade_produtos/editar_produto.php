<?php
include 'conexao.php';

$id = $_GET['id'];
$produto = $conn -> prepare("SELECT * FROM produtos WHERE id = ?");
$produto -> execute([$id]);
$produto = $produto -> fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $arquivoNovo = $_FILES['imagem'];

    if ($arquivoNovo['error'] === UPLOAD_ERR_OK){
        $nomeArquivoNovo = uniqid() . "-" . $arquivoNovo['name'];

        if (file_exists("uploads/" . $cliente['imagem'])) {
            unlink ("uploads/" . $cliente['imagem']);
        }

        $stmt = $conn -> prepare("UPDATE produto SET nome = ?, descricao = ?, preco = ?, quantidade = ? WHERE id = ?");
        $stmt -> execute([$nome, $descricao, $preco, $quantidade, $nomeArquivoNovo, $id]);
    } else {
        $stmt = $conn -> prepare ("UPDATE produtos SET nome = ?, descricao = ?, preco = ?, quantidade = ? WHERE id = ?");
        $stmt -> execute([$nome, $descricao, $preco, $quantidade, $id]);
    
    }
    header("Location: lista_produtos.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Editar Produto</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($produto['nome']) ?>" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" value="<?= htmlspecialchars($produto['descricao'])?>" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" class="form-control" name="preco" value="<?= htmlspecialchars($produto['preco'])?>" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" value="<?= htmlspecialchars($produto['quantidade'])?>" required>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem do produto</label>
                <input type="file" calss="form-control" name="imagem" accept=".png .jpg">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>

