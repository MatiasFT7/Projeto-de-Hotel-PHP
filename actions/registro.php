<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $mysqli = new mysqli("localhost", "hotel", "1234", "hotel");

    $result = $mysqli->query("INSERT INTO login (email, senha, nome) VALUES ('$email', '$senha', '$nome')");


    header("Location: ../index.php");
    exit();
}
?>


