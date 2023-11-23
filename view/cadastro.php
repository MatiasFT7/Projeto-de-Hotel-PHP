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
    <form method="POST" action="../actions/registro.php">
      <h1>Formulário de inscrição</h1>

      <div class="form-container">
        <h3>Preencha seus dados</h3>

        <div class="form-body">
          <label>
            <span>Nome: </span>
            <input type="text" name="nome" require />
          </label>
          <label>
            <span> Email: </span>
            <input type="email" name="email" require />
          </label>
          <label>
            <span>Senha: </span>
            <input type="password" name="senha" require />
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
