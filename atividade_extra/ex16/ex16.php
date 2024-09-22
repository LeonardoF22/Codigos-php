<?php
$texto = $_POST['texto'];
//urlencode codifica o texto enviado para que seja usado sem conflito na url
$url = "https://api.qrserver.com/v1/create-qr-code/?data=". urlencode($texto);
echo '<img src="' . $url . '"/>';
?>