<?php
// Inicializa as variáveis
$email = $senha = '';
$mensagemErro = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtém os valores dos campos do formulário
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $senha = isset($_GET['senha']) ? $_GET['senha'] : '';

    // Lógica de autenticação simples (substitua isso pela sua lógica real de autenticação)
    if ($email == 'seu_email@example.com' && $senha == 'sua_senha') {
        // Redireciona para a página de início após o login bem-sucedido
        header('Location: view/inicio.html');
        exit();
    } else {
        $mensagemErro = 'Credenciais inválidas. Tente novamente.';
    }
}
?>ß

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

    <form method="get" action="view/inicio.html">
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
            href="view/cadastro.html"
            target="_blank"
            >Cadastre-se</a>
        </div>
      </div>
    </form>
    <footer>
    </footer>
  </body>
</html>
