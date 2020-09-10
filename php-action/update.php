<?php
//Conexão

session_start();

require_once 'db_connect.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (isset($_POST['titulo'])):

    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $sinopse = mysqli_escape_string($connect, $_POST['sinopse']);
    $categoria = mysqli_escape_string($connect, $_POST['categoria']);
    $editora = mysqli_escape_string($connect, $_POST['editora']);
    $autor = mysqli_escape_string($connect, $_POST['autor']);
    $edicao = mysqli_escape_string($connect, $_POST['edicao']);
    $ano = mysqli_escape_string($connect, $_POST['ano']);
    $numpg= mysqli_escape_string($connect, $_POST['numpg']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql="UPDATE livros SET titulo = '$titulo', sinopse = '$sinopse', categoria = '$categoria', editora = '$editora', autor = '$autor', edicao = '$edicao', ano = '$ano',numpg = '$numpg' WHERE id = '$id'";

    try {
        $_SESSION ['mensagem'] = "Alterado com Sucesso!";
        mysqli_query($connect, $sql);
        header('Location: ../index.php');
    } catch (Exception $e) {
        $_SESSION ['mensagem'] = "Erro ao Alterar";
        //echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        header('Location: ../index.php='.$e->getMessage());
    }

endif;