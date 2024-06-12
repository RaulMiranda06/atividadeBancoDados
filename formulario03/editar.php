<?php
include 'conexao.php';

if (!isset($_GET['id'])) {
    echo 'usuario não informado';
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM cadastro_filme  WHERE id='$id'";
$resultado = $conn->query($sql);


if ($resultado->num_rows <= 0) {
    echo 'usuario não encontrado';
    exit();
}

$linha = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $votacao = $_POST['votacao'];     
    $sql = "UPDATE cadastro_filme SET nome='$nome', votacao='$votacao' WHERE id='$id'";

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
value="<?php echo $linha['idade']; ?>"

    <h1>Formulário de Cadastro (POST)</h1>
    <form method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="filme" value="<?php echo $linha['nome'];?>" nome  </input><br><br>

        <label for="filme"> (Vote no seu o filme favorito) :</label><br><br>
        <select name="votocao" id="votacao">
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 1 </option>
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 2 </option>
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 3 </option>
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 4 </option>
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 5 </option>
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 6 </option>
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 7 </option>
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 8 </option>
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 9 </option>
            <option value="<?php echo $linha['votacao'];?>" velozes furiosos 10 </option>
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