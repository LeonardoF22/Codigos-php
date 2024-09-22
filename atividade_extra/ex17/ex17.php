<?php
$site = $_POST['site'];

//Caso o site esteja hospedado a função retorna um ip, se não retorna o endereço do site
$ip = gethostbyname($site);
if($ip === $site) {
    echo "<p>O dominio $site está disponível!</p>";
} else {
    echo "<p>O dominio $site está indisponível</p>";
}


?>