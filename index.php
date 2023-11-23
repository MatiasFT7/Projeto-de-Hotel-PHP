<?php
// Inicializa as variáveis
$email = '';
$erro = '';

// Verifica se o formulário foi enviado
//if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtém os valores dos campos do formulário
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $erro = isset($_GET['erro']) ? $_GET['erro'] : '';
//}
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
    <?php  if (isset($erro) && !empty($erro)) { ?>
      <p style="
    color: red;
    text-align: center;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
">  <?php  echo($erro) ?> </p>   

    <?php } ?>  

    <form method="post" action="actions/login.php">
      <span class="form-title"> Faça seu login </span>
      <!--adiciona uma legenda ao formulario-->
      <div class="form-body">
        <label>
          <!-- adiciona acessibilidade para input/ seu rotulo -->
          <span>E-mail:</span>
          <!-- Adiciona input de email-->
          <input type="email" name="email" require value="<?php  echo($email) ?>"  />
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
