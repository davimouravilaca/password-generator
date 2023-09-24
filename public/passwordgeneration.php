<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $includeNumbers = isset($_POST['includeNumbers']) ? $_POST['includeNumbers'] : false;
    $includeSymbols = isset($_POST['includeSymbols']) ? $_POST['includeSymbols'] : false;
    $passwordLength = isset($_POST['passwordLength']) ? intval($_POST['passwordLength']) : 8; // Comprimento padrão

    // Verifique se pelo menos um conjunto de caracteres é selecionado
    if (!$includeNumbers && !$includeSymbols) {
        echo "Selecione pelo menos números ou símbolos.";
        exit;
    }

    // Caracteres disponíveis
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    if ($includeNumbers) $characters .= '0123456789';
    if ($includeSymbols) $characters .= '!@#$%^&*()_+[]{}|;:,.<>?';

    // Gere a senha de forma mais segura
    $password = '';
    $characterSetLength = strlen($characters);
    for ($i = 0; $i < $passwordLength; $i++) {
        $randomIndex = random_int(0, $characterSetLength - 1);
        $password .= $characters[$randomIndex];
    }

    // Envie a senha gerada de volta para o JavaScript
    echo $password;
} else {
    // Manipule casos em que a solicitação não seja POST, se necessário
    echo "Acesso não autorizado.";
}
?>
