<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex10</title>
    <?php
    include 'conexao.php';
    // Criando um evento no banco de dados
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['adicionar'])){
        $nome = $_POST['evento'];
        $data = $_POST['data'];
        
        //Comando para inserir os dados
        $sql = "INSERT INTO tb_eventos (nome,data) VALUES (:nome, :data)";
        $stmt = $conn -> prepare($sql);

        //Alterando os valores que possuem :
        $stmt -> bindParam(':nome', $nome);
        $stmt -> bindParam(':data', $data);

        //Executando e inserirndo os dados no banco
        try{
            $stmt -> execute();
            echo "Novo evento registrado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao adicionar evento: " . $e -> getMessage();  
        }
    }

    //Verificando se delete foi clicado e excluindo o dado do banco
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
    
        $sql = "DELETE FROM tb_eventos WHERE id_evento = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
    
        try {
            $stmt->execute();
            echo "Evento excluído com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao excluir evento: " . $e->getMessage();
        }
    }
?>
</head>
<body>
    <h3>Cadastro de eventros</h3>
    <form action="ex10.php" method="POST">
        <label>Evento: </label>
        <input type="text" name="evento"><br><br>
        <label>Data: </label>
        <input type="date" name="data"><br><br>
        <input type="submit" value="cadastrar" name="adicionar">    
    </form>
     
    <?php
    //pegando os dados do banco
    $sql = "SELECT * FROM tb_eventos";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    //Verifica se possui algum resultado
    if($resultado) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Evento</th><th>Data</th><th>Ações</th></td>";

        //Exibindo os dados do banco
        foreach ($resultado as $row) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id_evento']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($row['data']) . "</td>";
            echo "<td>" . "<a href='ex10.php?delete={$row['id_evento']}'>Excluir</a>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "nenhum dado encontrado!";
    }
?>
</body>
</html>