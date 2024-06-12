<?php
    include'conexao.php';

    $id = $_GET["id"];

    $sql = "DElETE FROM cadastro_evento WHERE id='$id'";
    $resultado = $conn->query($sql);
    header('location: listar.php')
    

?>