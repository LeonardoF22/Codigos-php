<?php
include 'conexao.php';

$id = $_GET['id'];

$stmt = $conn -> prepare("DELETE FROM tb_despesas WHERE id_despesa = ?");
$stmt -> execute([$id]);
header("Location: index.php");
exit;
?>