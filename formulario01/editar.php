<?php
include 'conexao.php';

if (!isset($_GET['id'])) {
    echo 'usuario não informado';
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM cadastro_usuario  WHERE id='$id'";
$resultado = $conn->query($sql);


if ($resultado->num_rows <= 0) {
    echo 'usuario não encontrado';
    exit();
}

$linha = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $data_atualizacao = date("Y-m-d H:i:s");
    $sql = "UPDATE cadastro_usuario SET nome='$nome', email='$email', idade='$idade', data_atualizacao='$data_atualizacao' WHERE id='$id'";

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

    <h1>Formulário de Cadastro (POST)</h1>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $linha['nome']; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $linha['email']; ?>"><br><br>

        <label for="idade">Idade:</label>
        <input type="idade" id="idade" name="idade" value="<?php echo $linha['idade']; ?>"><br><br>


        <input type="submit" value="Enviar">
    </form>

    <br>
    <br>
    <br>

    <a href="listar.php"> Ver a lista de cadastro </a>


</body>

</html>