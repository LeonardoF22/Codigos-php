<?php
// Função para buscar o endereço
function getEndereco($cep){
    //Está acessando a api e passando o cep que será recebido
    $url = "http://viacep.com.br/ws/$cep/xml/";
    $xml = simplexml_load_file($url);
    return $xml;
}

$endereco = (getEndereco($_POST['cep']));

//Está mostrando um objeto com todos os dados recebidos pela API
//var_dump($endereco);

echo "<h2>Busca de CEP</h2>";
echo "<h3>O CEP informado pertence ao seguinte endereço</h3>";
echo "CEP: ". $endereco -> cep . "<br>";
echo "Rua: ". $endereco -> logradouro . "<br>";
echo "Bairro: ". $endereco -> bairro . "<br>";
echo "Cidade: ". $endereco -> localidade . "<br>";
echo "Estado: ". $endereco -> estado;
?>