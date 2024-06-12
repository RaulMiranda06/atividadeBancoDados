<?php
include 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $votacao = $_POST['votacao'];
    $nome = $_POST['nome'];

    $sql = "INSERT INTO cadastro_filme (votacao, nome) value ('$votacao', '$nome')";


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

    <h1>Formulário de filme (POST)</h1>
    <form method="POST">
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="filme"> (Vote no seu o filme favorito) :</label><br><br>
        <select name="votacao" id="votacao">
            <option value="votacao">velozes furiosos 1 </option>
            <option value="votacao">velozes furiosos 2 </option>
            <option value="votacao">velozes furiosos 3 </option>
            <option value="votacao">velozes furiosos 4 </option>
            <option value="votacao">velozes furiosos 5 </option>
            <option value="votacao">velozes furiosos 6 </option>
            <option value="votacao">velozes furiosos 7 </option>
            <option value="votacao">velozes furiosos 8 </option>
            <option value="votacao">velozes furiosos 9 </option>
            <option value="votacao">velozes furiosos 10 </option>
        </select>    


        <input type="submit" value="Enviar">
        <input type="reset" value="limpar">
    </form>

    <br>
    <br>
    <br>

    <a href="listar.php"> Ver a lista de cadastro </a>


</body>

</html>