<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    header("Location: ../index.php");
    exit();
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrado com sucesso</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
                <div class="center logo">
                    <img src="img/hotel.png" alt="imagem de hotel">
                </div>

        <form method="get" action="../index.php">
            <span class="form-title">Usuário cadastrado com sucesso!</span>
                <div class="buttons">
                    <button type="submit">Voltar a tela inicial</button>
                </div>
        </form>
</body>
</html>