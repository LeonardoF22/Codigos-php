<?php
include 'conexao.php';

$id = $_GET['id'];
$cliente = $conn -> prepare("SELECT arquivo_pdf FROM cliente WHERE id = ?");
$cliente -> execute([$id]);
$cliente = $cliente -> fetch(PDO::FETCH_ASSOC);

if (file_exists("uploads/" . $cliente['arquivo_pdf'])) {
    unlink("uploads/" . $cliente['arquivo_pdf']);
}

$stmt = $conn -> prepare("DELETE FROM cliente WHERE id = ?");
$stmt -> execute([$id]);
header("Location: index.php");
exit;
?>