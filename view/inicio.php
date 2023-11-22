<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $mensagem = $_POST["mensagem"];

   
    header("Location: inicio.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Pousada </title>
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/register.css" />
</head>
<body>
    <header>
        <div class="container">
            <h1> Pousada </h1>
            <nav>
                <ul>
                    <li><a href="inicio.php">Início</a></li>
                    <li><a href="./quartos.php">Quartos</a></li>
                    <li><a href="./contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="center logo">
      <img src="../img/hotel.png" alt="imagem de hotel" />
    </div>
    <form method="post" action="./sucesso.php">
    

      <div class="form-container">
      <h1>Formulário de reserva</h1>

        <div class="form-body">
          <label>
            <span>Digite o nome do titular: </span>
            <input type="text" name="nome" />
          </label>
          <label>
            <span>Numero de pessoas (max.5) </span>
            <input type="number" name="numero" min="1" max="5"/>
          </label>
          <label>
            <span> Selecione a data de entrada: </span>
            <input type="date" name="data" />
          </label>
          <label>
            <span> Selecione a data de saída: </span>
            <input type="date" name="data" />
          </label>
          <label>
            <span>Informações adicionais:<br> </span>
            <input name="mensagem" rows="5" required></textarea>
          </label>
            <div class="buttons">
            <button>Concluir Reserva</button>
          </div>
      </div>
    </form>

    <section id="home" class="hero">
        <div class="container">
            <h2> Bem-vindo à Pousada </h2>
            <p>Desfrute de uma estadia tranquila e relaxante em nossa pousada.</p>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>Sobre Nós</h2>
            <p>A Pousada Amanhecer oferece uma experiência única, combinando conforto e tranquilidade. Nossas instalações modernas e equipe hospitaleira garantem uma estadia memorável.</p>
        </div>
    </section>
    <?php

?>
</body>
</html>
