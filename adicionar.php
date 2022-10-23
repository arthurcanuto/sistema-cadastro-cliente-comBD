<?php

include 'header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novos Clientes </h3>
        <form action="create.php" method="POST">
        <form>
            <div class= "input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class= "input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Sobrenome</label>
            </div>
            <div class= "input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Email</label>
            </div>
            <div class= "input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Idade</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn grey"> Cadastrar</button>
            <a href="index.php" type="submit" class="btn green"> Lista de Clientes</a>
        </form>
        
    </div>
</div>

<?php

include 'footer.php';
?>