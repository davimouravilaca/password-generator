<?php
$PasswordLength = $_POST['PasswordLength'];
$IncludeNumbers = $_POST['IncludeNumbers'];
$IncludeSymbols = $_POST['IncludeSymbols'];

$letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
$numbers = "01234567890123456789";
$symbols = "!\"#$%&'()*+,-./[\]^_`{|}~";

switch ($PasswordLength) {
    case 1:
        $PasswordLength = 4;
        break;
    case 2:
        $PasswordLength = 8;
        break;
    case 3:
        $PasswordLength = 12;
        break;
    case 4:
        $PasswordLength = 15;
        break;
    case 5:
        $PasswordLength = 20;
        break;
}

if ($PasswordLength != 4) {
$caracteres = $letras;
    if ($IncludeNumbers == 'true'){
    $caracteres .= $numbers;
    }
    if ($IncludeSymbols == 'true'){
    $caracteres .= $symbols;
    }
}
else {
    $caracteres = $numbers;
}

$password = '';
$caracteresLength = strlen($caracteres);

for ($i = 0; $i < $PasswordLength; $i++) {
    $randomIndex = mt_rand(0, $caracteresLength - 1);
    $password .= $caracteres[$randomIndex];
}

echo $password;
?>