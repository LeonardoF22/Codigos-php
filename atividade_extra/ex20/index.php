<?php
include 'conexao.php';
$despesas = $conn -> query("SELECT tb_categoriasdespesas.categoriaDespesa, tb_despesas.nome_gasto, tb_despesas.valor, tb_despesas.id_despesa
FROM tb_despesas
INNER JOIN tb_categoriasdespesas
WHERE tb_categoriasdespesas.id_categoriadespesa = tb_despesas.id_categoriadespesa
");

$receitas = $conn -> query("SELECT tb_categoriasreceitas.categoriaReceita, tb_receitas.nome_receita, tb_receitas.valor, tb_receitas.id_receita
FROM tb_receitas
INNER JOIN tb_categoriasreceitas
WHERE tb_categoriasreceitas.id_categoriareceita = tb_receitas.id_categoriareceita
");
$valorTotDespesa = 0;
$valorTotReceita = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex20</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3 class="mt-4">Lista de Receitas</h3>
        <table class="table table-bordered table-striped w-75">
                <thread>
                    <tr>
                        <th>Receita</th>
                        <th>Categoria</th>
                        <th>Valor</th>
                        <th>Excluir</th>
                    </tr>
                </thread>
                <tbody>
                    <?php foreach ($receitas as $receita):?>
                        <tr>
                            <td class="w-25"><?= ($receita['nome_receita'])?></td>
                            <td class="w-25"><?= ($receita['categoriaReceita'])?></td>
                            <td class="w-25">R$<?= ($receita['valor'])?></td>
                            <td>
                                <a href="excluirReceita.php?id=<?= $receita['id_receita'] ?>" class="btn btn-warning" onclick="return confirm('A exclusão será permanente! Tem certeza disso?')">Excluir</a>
                            </td>
                        </tr>  
                    <?php 
                        $valorTotReceita+= $receita['valor']; 
                        endforeach;
                    ?>            
                </tbody>
        </table>
        
        
    <h3 class="mt-4">Lista de Despesas</h3>
        <table class="table table-bordered table-striped w-75">
                <thread>
                    <tr>
                        <th>Despesa</th>
                        <th>Categoria</th>
                        <th>Valor</th>
                        <th>Excluir</th>
                    </tr>
                </thread>
                <tbody>
                    <?php foreach ($despesas as $despesa):?>
                        <tr>
                            <td class="w-25"><?= $despesa['nome_gasto']?></td>
                            <td class="w-25"><?= $despesa['categoriaDespesa']?></td>
                            <td class="w-25">R$<?= $despesa['valor']?></td>
                            <td>
                                <a href="excluirDespesa.php?id=<?= $despesa['id_despesa'] ?>" class="btn btn-warning" onclick="return confirm('A exclusão será permanente! Tem certeza disso?')">Excluir</a>
                            </td>
                        </tr>  
                    <?php 
                        $valorTotDespesa+= $despesa['valor']; 
                        $saldo = $valorTotReceita - $valorTotDespesa;
                        endforeach;
                    ?>       
                </tbody>
        </table>

        <h4>Seu saldo atual é de R$<?= $saldo ?></h4>


        <div class="col-md-6">
            <a href="cadastrarReceita.php" class="btn btn-success">Cadastrar Receitas</a>
            <a href="cadastrarDespesa.php" class="btn btn-danger">Cadastrar Despesa</a>
        </div>


</div>  
</body>
</html>