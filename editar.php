<?php
//conexão
include_once 'php-action/db_connect.php';

//header
include_once 'includes/header.php';

//select
if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM livros WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    endif;
?>

    <div class="row">

        <div class="col s12 m6 push-m3">
            <h3 class="light">Editar Livro</h3>
            <form action="php-action/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">

            <div class="input-field col s12">
                <input type="text" name="titulo" id="titulo" value="<?php echo $dados['titulo'];?>"></input>
                <label for="titulo">Título</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sinopse" id="sinopse"value="<?php echo $dados['sinopse'];?>"></input>
                <label for="sinopse">Sinopse</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="categoria" id="categoria"value="<?php echo $dados['categoria'];?>"></input>
                <label for="categoria">Categoria</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="editora" id="editora"value="<?php echo $dados['editora'];?>"></input>
                <label for="editora">Editora</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="autor" id="autor"value="<?php echo $dados['autor']?>"></input>
                <label for="autor">Autor</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="edicao" id="edicao"value="<?php echo $dados['edicao']?>"></input>
                <label for="edicao">Edição</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="ano" id="ano"value="<?php echo $dados['ano']?>"></input>
                <label for="ano">Ano</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="numpg" id="numpg"value="<?php echo $dados['numpg']?>"></input>
                <label for="numpg">Número de Paginas</label>
            </div>

            <button type="submit" name="btn-atualizar" class="btn">Atualizar Livro</button>
            <a href="index.php" class="btn blue" >Voltar a Lista</a>
        </form>

        </div>



    </div>



<?php
//footer
include_once 'includes/footer.php';
?>