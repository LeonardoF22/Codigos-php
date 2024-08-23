<?php
$prod1 = $_POST['prod1'];
$prod2 = $_POST['prod2'];

$desc1 = $prod1 - ($prod1*$_POST['desc1']/100);
$desc2 = $prod2 - ($prod2*$_POST['desc2']/100);

$tot = $desc1 + $desc2;

echo "<h3>Calcula desconto</h3>";
echo "O valor do 1º produto com desconto é R$ $desc1 <br>";
echo "O valor do 2º produto com desconto é R$ $desc2 <br>";
echo "O valor total é R$ $tot";
?>