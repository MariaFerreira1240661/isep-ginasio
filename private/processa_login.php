<?php

require_once 'includes/funcoes.php';
start_session();

// --------------------------------------------------------------------
// SEGURANÇA: Impede que o utilizador aceda diretamente a este script.
// --------------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../public/login.php');
    return;
}

// --------------------------------------------------------------------
// RECOLHA DE DADOS DO FORMULÁRIO
// --------------------------------------------------------------------
$username = isset($_POST['text_username']) ? $_POST['text_username'] : '';
$password = isset($_POST['text_password']) ? $_POST['text_password'] : '';

// --------------------------------------------------------------------
// VALIDAÇÃO DOS DADOS
// --------------------------------------------------------------------
$validation_errors = [];

if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    $validation_errors[] = 'O username tem que ser um email válido.';
}

if (strlen($username) < 5 || strlen($username) > 50) {
    $validation_errors[] = 'O username deve ter entre 5 e 50 caracteres.';
}

if (strlen($password) < 6 || strlen($password) > 12) {
    $validation_errors[] = 'A password deve ter entre 6 e 12 caracteres.';
}

if (!empty($validation_errors)) {
    $_SESSION['validation_errors'] = $validation_errors;
    header('Location: ../public/login.php');
    return;
}

// --------------------------------------------------------------------
// SIMULAÇÃO DE RESULTADO DE LOGIN
// --------------------------------------------------------------------
$result['status'] = 1; // 1 = login válido, 0 = login inválido

// --------------------------------------------------------------------
// VERIFICAÇÃO DO ESTADO DA AUTENTICAÇÃO
// --------------------------------------------------------------------
if (!$result['status']) {
    $_SESSION['server_error'] = 'Login inválido';
    header('Location: ../public/login.php');
    return;
}

// --------------------------------------------------------------------
// LOGIN BEM-SUCEDIDO: Guardar o utilizador na sessão
// --------------------------------------------------------------------
$_SESSION['utilizador'] = $username;

// Redirecionar para a página principal privada
header('Location: home.php');
exit;