<?php

session_start();

require 'conexaobd.php';

if(isset($_POST['btn-deletar'])):

$id = mysqli_escape_string($connect, $_POST['IdUsuario']);

$sql = " DELETE FROM clientes WHERE IdUsuario = '$id' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('location: index.php?sucesso');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar!";
    header('location: index.php?erro');
    endif;
endif;

?>
