<?php
include 'conexao.php';

$id = $_GET['id'];

$stmt = $conn -> prepare("DELETE FROM tb_receitas WHERE id_receita = ?");
$stmt -> execute([$id]);
header("Location: index.php");
exit;
?>