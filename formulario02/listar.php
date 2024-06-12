<?php
include 'conexao.php';

$sql = "SELECT * FROM cadastro_evento ";
$resultado = $conn->query($sql);

?>
<center>
    <table border='1' widht='50%'>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Evento</th>
            <TH>Editar</TH>
            <th>Remover</th>
        </tr>

        <?php
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>
                <td> " . $linha['id'] . " </td>   
                <td> " . $linha['nome'] . " </td>
                <td> " . $linha['email'] . " </td>
                <td> " . $linha['evento'] . " </td>
                <td> <a href='editar.php?id=" . $linha['id'] . "'> editar </a></td>
                <td> <a href='remover.php?id=" . $linha['id'] . "'> remover </a> </td>
                </tr>";
        }
                
        ?>
       
    </table>
    <br><br> <a href="index.php"> Cadastrar usuario </a> 