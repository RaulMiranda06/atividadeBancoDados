<?php
include 'conexao.php';

if (!isset($_GET['id'])) {
    echo 'usuario não informado';
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM cadastro_evento WHERE id='$id'";
$resultado = $conn->query($sql);


if ($resultado->num_rows <= 0) {
    echo 'usuario não encontrado';
    exit();
}

$linha = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $evento = $_POST['evento'];
    $sql = "UPDATE cadastro_evento SET nome='$nome', email='$email', evento='$evento' WHERE id='$id'";

    if ($conn->query($sql) == TRUE) {
        echo "cadastro atualizado";
    } else {
        echo "erro ao cadastrar";
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


    <h1>Formulário de Evento (POST)</h1>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $linha['nome']; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $linha['email']; ?>"><br><br>

        <label for="evento">Evento:</label>
        <select name="evento" id="evento">
            <option value="<?php echo $linha['evento']; ?>">Casamento </option>
            <option value="<?php echo $linha['evento']; ?>">Aniversario </option>
            <option value="<?php echo $linha['evento']; ?>">Teatro </option>
            <option value="<?php echo $linha['evento']; ?>">Museu </option>
        </select><br><br>


        <input type="submit" value="Enviar">
    </form>

    <br>
    <br>
    <br>

    <a href="listar.php"> Ver a lista de cadastro </a>


</body>

</html>