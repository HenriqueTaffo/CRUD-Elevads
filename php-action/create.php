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


    $sql="INSERT INTO livros (titulo, sinopse, categoria, editora, autor, edicao, ano, numpg) VALUES ('$titulo', '$sinopse', '$categoria', '$editora', '$autor', '$edicao', '$ano', '$numpg')";

    try {
        $_SESSION ['mensagem'] = "Cadastrado com Sucesso!";
        mysqli_query($connect, $sql);
        header('Location: ../index.php');
    } catch (Exception $e) {
        $_SESSION ['mensagem'] = "Erro ao Cadastrar";
        //echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        header('Location: ../index.php='.$e->getMessage());
    }

endif;