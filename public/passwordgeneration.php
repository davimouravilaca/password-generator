<?php
$PasswordLength = $_POST['PasswordLength'];
$IncludeNumbers = $_POST['IncludeNumbers'];
$IncludeSymbols = $_POST['IncludeSymbols'];

$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
$numbers = "0123456789";

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

if ($IncludeNumbers == true) {
    $caracteres .= $numbers;
}

if ($IncludeSymbols == true) {
    $caracteres .= "!@#$%^&*()_+-={}[]|\\:;\"'<>,.?/~`";
}

if ($PasswordLength == 4){
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
