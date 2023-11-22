<?php
// Inicializa as variáveis
$email = $senha = '';
$erro = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtém os valores dos campos do formulário
    $email = isset($_POST['email']) ? $_GET['email'] : '';
    $senha = isset($_POST['senha']) ? $_GET['senha'] : '';

    
    if ($email == 'gabriel.matias84@gmail.com' && $senha == 'ga1234') {
        // Redireciona para a página de início após o login bem-sucedido
        header('Location: inicio.php');
        exit();
    } else {
        $erro = 'Email ou senha incorretos. Por favor, tente novamente';
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="center logo">
      <img src="img/hotel.png" alt="imagem de hotel" />
    </div>
    <form method="GET" action="view/inicio.php">
      <span class="form-title"> Faça seu login </span>
      <!--adiciona uma legenda ao formulario-->
      <div class="form-body">
        <label>
          <!-- adiciona acessibilidade para input/ seu rotulo -->
          <span>E-mail:</span>
          <!-- Adiciona input de email-->
          <input type="email" name="email" />
        </label>
        <label>
          <span> Senha:</span>
          <input type="password" name="senha" />
          <!-- Adiciona Input de texto-->
        </label>

        <div class="buttons">
          <button>Login</button>

          <!-- Adiciona botão com Link-->

          <a
            title="Clique aqui para se cadastrar"
            class="button-register"
            href="view/cadastro.php"
            target="_blank"
            >Cadastre-se</a>
        </div>
      </div>
    </form>
    <footer>
    </footer>
  </body>
</html>
