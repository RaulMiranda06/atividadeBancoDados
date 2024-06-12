<?php
include 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $data_cadastro = date("Y-m-d H:i:s");
    $data_atualizacao = date("Y-m-d H:i:s");
    $status = 0;

    $sql = "INSERT INTO cadastro_usuario (nome, email, idade, data_cadastro, data_atualizacao, status) VALUES ('$nome', '$email', '$idade', '$data_cadastro', '$data_atualizacao','$status')";


    if ($conn->query($sql) == TRUE) {
        echo "REGISTRO REALIZADO COM SUCESSO";
    } else {
        echo "erro " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <h1>Formulário de Cadastro (POST)</h1>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="idade">Idade:</label>
        <input type="idade" id="idade" name="idade" required><br><br>


        <input type="submit" value="Enviar">
    </form>

    <br>
    <br>
    <br>

    <a href="listar.php"> Ver a lista de cadastro </a>


</body>

</html>