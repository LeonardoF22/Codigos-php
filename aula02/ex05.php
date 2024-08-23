<?php
$idade =$_POST['txtnum'];

if ($idade < 10 ){
    echo "<p>Desculpe, apenas alunos com 10 anos ou mais podem entrar na festa!</p>";
} else {
    echo "<p>Bem-vindo à festa!</p>";
}
echo "<p>Programa encerrado</p>";

?>