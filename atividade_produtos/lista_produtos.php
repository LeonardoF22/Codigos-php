<?php
session_start();
include 'conexao.php';
include 'menu.php';

$produtos = $conn -> query("SELECT * FROM produtos") -> fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Lista de Produtos</h1>
        <?php
            if($_SESSION['nivel_acesso'] == 'ADMINISTRADOR'){
                echo '<a href="cadastrar_produto.php" class="btn btn-success mb-3">Cadastrar Produto</a>';
            }
        ?>
        <table class="table table-bordered">
            <thread>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Imagem</th>
                    <th>Ações</th>
                </tr>
            </thread>
            <tbody>
                <?php foreach ($produtos as $produto):?>
                    <tr>
                        <td><?= htmlspecialchars($produto['nome'])?></td>
                        <td><?= htmlspecialchars($produto['descricao'])?></td>
                        <td>R$<?= htmlspecialchars($produto['preco'])?></td>
                        <td><?= htmlspecialchars($produto['quantidade'])?></td>


                        <td><a href="uploads/<?= htmlspecialchars($produto['imagem'])?>" target="_blank">Ver Imagem</a></td>
                        <td>
                        <?php if ($_SESSION['nivel_acesso'] == "ADMINISTRADOR"): ?>
                        <a href="editar_produto.php?id=<?= $produto['id'] ?>" class="btn btn-warning">Editar</a>
                        <a href="excluir_produto.php?id=<?= $produto['id'] ?>" class="btn btn-warning" onclick="return confirm('A exclusão será permanente! Tem certeza disso?')">Excluir</a>
                        <?php else: ?>
                            <span class="text-muted">Sem permissão</span>
                            <?php endif; ?>
                    </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>