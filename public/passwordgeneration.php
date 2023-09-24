<?php
$PasswordLength = $_POST['PasswordLength'];// Corrija o nome da variável para corresponder ao enviado pelo JavaScript
$IncludeNumbers = $_POST['IncludeNumbers'];
$IncludeSymbols = $_POST['IncludeSymbols'];

$generatedPasswordText = md5(mt_rand(0, 999)) . "exemplo";

echo $generatedPasswordText; // Corrigido o uso do echo
?>
