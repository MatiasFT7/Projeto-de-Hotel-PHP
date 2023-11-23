<?php
// Inicializa as variáveis
$email = $senha = '';
$erro = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores dos campos do formulário
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    $mysqli = new mysqli("localhost", "hotel", "1234", "hotel");

    $result = $mysqli->query("SELECT email, senha FROM login where email='$email' and senha='$senha' LIMIT 1");

    if ( $result->num_rows>0) {
        // Redireciona para a página de início após o login bem-sucedido
        header('Location: ../view/inicio.php');
        exit();
    } else {
        $erro = 'Email ou senha incorretos. Por favor, tente novamente';

        header("Location: ../index.php?erro=$erro&email=$email");
    }
}
?>