<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex15</title>
    <?php
    include 'conexao.php';
    //Criando um contato no banco de dados
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['adicionar'])){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        //Comando para inserir os dados
        $sql = "INSERT INTO tb_contatos (nome, telefone, email) VALUES (:nome, :telefone, :email)";
        $stmt = $conn -> prepare($sql);

        //Alterando os valores acima que possuem :
        $stmt -> bindParam(':nome', $nome);
        $stmt -> bindParam(':telefone', $telefone);
        $stmt -> bindParam(':email', $email);

        //Executando e inserindo os dados no banco
        try{
            $stmt -> execute();
            echo "Novo contato salvo com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao adicionar contato: " . $e -> getMessage();
        }
    }

        //Verificando se delete foi clicado e excluindo o dado do banco
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];

            $sql = "DELETE FROM tb_contatos WHERE id_contato = :id";
            $stmt = $conn -> prepare($sql);
            $stmt -> bindParam(':id', $id);

            try{
                $stmt -> execute();
                echo "Contato excluido com sucesso!";
            } catch (PDOException $e){
                echo "Erro ao excluir eventos: " . $e -> getMessage(); 
            }
        }

    ?>
</head>
<body>
    <h3>Agenda de contatos</h3>
    <form action="ex15.php" method="POST">
        <label>Nome: </label>
        <input type="text" name="nome"><br><br>
        <label>Telefone: </label>
        <input type="text" name="telefone"><br><br>
        <label>E-mail: </label>
        <input type="text" name="email"><br><br>
        <input type="submit" value="Adicionar Contato" name="adicionar">
    </form>
    
    <?php
    // pegando os dados do banco
    $sql = "SELECT * FROM tb_contatos";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $resultados = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    //Verifica se possui algum resultado
    if($resultados){
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th><th>Email</th></td>";

        //Exibindo os dados do banco
        foreach ($resultados as $row){
            echo "<tr>";
            echo "<td>". htmlspecialchars($row['id_contato']) ."</td>";
            echo "<td>". htmlspecialchars($row['nome']) ."</td>";
            echo "<td>". htmlspecialchars($row['telefone']) ."</td>";
            echo "<td>". htmlspecialchars($row['email']) ."</td>";
            echo "<td>" . "<a href='ex15.php?delete={$row['id_contato']}'>Excluir</a>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum contato cadastrado!";
    }
?>
</body>
</html>