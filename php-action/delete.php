<?php
//Conexão

session_start();

require_once 'db_connect.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (isset($_GET['id'])):

    $id = mysqli_escape_string($connect, $_GET['id']);    

    $sql="DELETE FROM livros WHERE id = '$id'";

    try {
        $_SESSION ['mensagem'] = "Excluido com Sucesso!";
        mysqli_query($connect, $sql);
        header('Location: ../index.php');
    } catch (Exception $e) {
        $_SESSION ['mensagem'] = "Erro ao excluir";
        $_SESSION ['erro'] = $e->getMessage();
        //echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        header('Location: ../index.php');
    }

endif;