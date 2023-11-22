<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["Senha"];

    // Faça o que for necessário com os dados (por exemplo, armazená-los em um banco de dados)

    // Redirecione o usuário para uma página de sucesso
    header("Location: cadastro.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Página de Inscrição</title>
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/register.css" />
  </head>

  <body>
    <div class="center logo">
      <img src="../img/hotel.png" alt="logo do hotel" />
    </div>
    <form method="post" action="../index.php">
      <h1>Formulário de inscrição</h1>

      <div class="form-container">
        <h3>Preencha seus dados</h3>

        <div class="form-body">
          <label>
            <span>Nome: </span>
            <input type="text" name="nome" />
          </label>
          <label>
            <span> Email: </span>
            <input type="email" name="email" />
          </label>
          <label>
            <span>Senha: </span>
            <input type="password" name="Senha" />
          </label>
            <div class="buttons">
            <button>Concluir cadastro</button>
          </div>
      </div>
    </form>
    <footer>
    </footer>
  </body>
</html>
