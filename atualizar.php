<?php
session_start();
require 'conexaobd.php';

if(isset($_POST['btn-editar'])):
$nome = mysqli_escape_string($connect, $_POST['nome']);
$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
$email = mysqli_escape_string($connect, $_POST['email']);
$idade = mysqli_escape_string($connect, $_POST['idade']);
$id = mysqli_escape_string($connect, $_POST['IdUsuario']);

$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade= '$idade' WHERE IdUsuario = '$id' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Aualizado com sucesso!";
    header('location: index.php?sucesso');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
    header('location: index.php?erro');
    endif;
endif;
