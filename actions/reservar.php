<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $numero = $_POST["numero"];
    $entrada = $_POST["entrada"];
    $saida = $_POST["saida"];
    $mensagem = $_POST["mensagem"];

    $mysqli = new mysqli("localhost", "hotel", "1234", "hotel");

    $result = $mysqli->query("INSERT INTO reserva (titular, pessoa, entrada, saida, info) VALUES ('$nome', $numero, '$entrada', '$saida', '$mensagem')");


    header("Location: ../view/sucesso.php");
    exit();
}
?>
