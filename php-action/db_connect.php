<?php
//Conexão com Banco de Dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";


$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()):
    echo "Erro na Conexão: ".mysqli_connect_error();
endif;

?>

