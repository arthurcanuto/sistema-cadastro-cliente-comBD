<?php

$servername= "127.0.0.1";
$username= "root";
$password= "Vacapreta123!@#";
$db_name= "crud";

$connect= mysqli_connect($servername, $username, $password , $db_name);
mysqli_set_charset($connect, "utf-8");

if(mysqli_connect_error()):
    echo "Erro na conexão" .mysqli_connect_error();
endif;
