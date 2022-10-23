<?php

session_start();
if(isset($_SESSION['mensagem'])):
    echo $_SESSION['mensagem'];
    ?>
<!-- mensagem de erro ou sucesso -->
<script>
    window.onload = function(){
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
    }
</script>

<?php
endif;
session_unset();

?>