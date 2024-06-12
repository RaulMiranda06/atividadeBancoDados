<?php
include 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $evento = $_POST['evento'];
    $status = 0;

    $sql = "INSERT INTO cadastro_evento (nome,email,evento,status) value ('$nome', '$email', '$evento', '$status')";


    if ($conn->query($sql) == TRUE) {
        echo "REGISTRO REALIZADO COM SUCESSO";
    } else {
        echo "erro " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <h1>Formulário de Evento (POST)</h1>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="evento">Evento:</label>
        <select id="evento" name="evento" required> <br><br>
            <option value="casamento">Casamento</option>
            <option value="aniversario">Aniversario</option>
            <option value="teatro">Teatro</option>
            <option value="museu">Museu</option>    
        </select><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>

    <br>
    <br>
    <br>

    <a href="listar.php"> Ver a lista de cadastro </a>


</body>

</html>