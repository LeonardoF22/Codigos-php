<?php
$tempc = $_POST['temperatura'];
$tempf = ($tempc * 9 / 5) + 32;

echo "<h3>Conversão de temperatura</h3> <br>";
echo "$tempc ºc são $tempf ºf";



?>