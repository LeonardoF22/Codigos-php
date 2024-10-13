<?php
include 'conexao.php';

$id = $_GET['id'];
$produto = $conn -> prepare("SELECT imagem FROM produtos WHERE id = ?");
$produto -> execute([$id]);
$produto = $produto -> fetch(PDO::FETCH_ASSOC);

if (file_exists("uploads/" . $produto['imagem'])) {
    unlink("uploads/" . $produto['imagem']);
}

$stmt = $conn -> prepare("DELETE FROM produtos WHERE id = ?");
$stmt -> execute([$id]);
header("Location: lista_produtos.php");
exit;
?>