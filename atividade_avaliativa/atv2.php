<?php

function getEndereco($a){
    $url = "http://viacep.com.br/ws/$a/xml/";
    $xml = simplexml_load_file($url);
    return $xml;
}

$nome = $_POST['nome'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$endereco = getEndereco($cep);


echo "<h3>Cadastro realizado com sucesso para o usuário $nome</h3>";
echo "<p>CEP: $cep</p>";
echo "<p>Rua:" . $endereco -> logradouro . "</p>";
echo "<p>Bairro: " . $endereco -> bairro ."</p>";
echo "<p>Cidade: ". $endereco -> localidade . "-" . $endereco -> uf ."</p>";

echo "<p>E-mail: $email</p>";
?>