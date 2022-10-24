<?php
include_once 'conexaobd.php';
include_once 'header.php';

if(isset($_GET['IdUsuario'])):
  
    $id = mysqli_escape_string($connect, $_GET['IdUsuario']);

    $sql = "SELECT * FROM clientes WHERE IdUsuario = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Clientes </h3>
        <form action="atualizar.php" method="POST">
            <input type = "hidden" name= "IdUsuario" value = "<?php echo $dados['IdUsuario']; ?>">
            <div class= "input-field col s12">
                <input type="text" value="<?php echo $dados['nome']; ?>" name="nome" id="nome"  >
                <label for="nome">Nome</label>
            </div>
            <div class= "input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class= "input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
                <label for="email">Email</label>
            </div>
            <div class= "input-field col s12">
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>" >
                <label for="idade">Idade</label>
            </div>
            <button type="submit" name="btn-editar" class="btn grey"> Atualizar</button>
            <a href="index.php" type="submit" class="btn green"> Lista de Clientes</a>
        </form>
        
    </div>
</div>

<?php

include 'footer.php';
?>
