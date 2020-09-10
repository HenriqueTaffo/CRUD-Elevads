<?php

//header
include_once 'includes/header.php';

?>

    <div class="row">

        <div class="col s12 m6 push-m3">
            <h3 class="light">Novo Livro</h3>
            <form action="php-action/create.php" method="POST">

        <form>
            <div class="input-field col s12">
                <input type="text" name="titulo" id="titulo"></input>
                <label for="titulo">Título</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sinopse" id="sinopse"></input>
                <label for="sinopse">Sinopse</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="categoria" id="categoria"></input>
                <label for="categoria">Categoria</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="editora" id="editora"></input>
                <label for="editora">Editora</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="autor" id="autor"></input>
                <label for="autor">Autor(a)</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="edicao" id="edicao"></input>
                <label for="edicao">Edição</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="ano" id="ano"></input>
                <label for="ano">Ano</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="numpg" id="numpg"></input>
                <label for="numpg">Número de Paginas</label>
            </div>

            <button type="submit" name="btn-adicionar" class="btn">Adicionar Livro</button>
            <a href="index.php" class="btn blue" >Voltar a Lista</a>
        </form>

        </div>



    </div>

<?php
//footer
include_once 'includes/footer.php';
?>