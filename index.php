<?php
//sessão
//conexão
include_once 'php-action/db_connect.php';
//header
include_once 'includes/header.php';
//mensagem
include_once 'includes/message.php';
?>

	<div class="row">
		
		<div class="col s12 m6 push-m3">
			<h3 class="light">Lista de Livros</h3>
            <table class="striped">

                <thead>

                <tr>

                    <th>Título:</th>
                    <th> Sinopse:</th>
                    <th> Categoria:</th>
                    <th>Editora:</th>
                    <th> Autor(a):</th>
                    <th> Edição:</th>
                    <th> Ano:</th>
                    <th> Número de Páginas:</th>
                    <th>Capa:</th>

                </tr>

                </thead>


                <tbody>

                    <?php
                    $sql = "SELECT * FROM livros";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)):
                    ?>

                     <tr>
                    <td><?php echo $dados['titulo']; ?></td>
                    <td><?php echo $dados['sinopse']; ?></td>
                    <td><?php echo $dados['categoria']; ?></td>
                    <td><?php echo $dados['editora']; ?></td>
                    <td><?php echo $dados['autor']; ?></td>
                    <td><?php echo $dados['edicao']; ?></td>
                    <td><?php echo $dados['ano']; ?></th>
                    <td><?php echo $dados['numpg']; ?></td>
                    
                         <td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating"><i class="material-icons">edit</i> </a></td>

                         <td><button data-target="modal<?php echo $dados['id'];?>" class="btn-floating modal-trigger"><i class="material-icons red">delete</i> </button></td>

                        <!-- Modal Structure -->
                                  <div id="modal<?php echo $dados['id'];?>" class="modal">
                                    <div class="modal-content">
                                      <h4>Opa!</h4>
                                      <h4>Tem certeza que deseja excluir este livro?</h4>
                                    </div>
                                    <div class="modal-footer">
                                      <button href="#!" class="modal-close waves-effect waves-green btn btn-flat">Cancelar</button>

                                      <a class="btn" href="php-action/delete.php?id=<?php echo $dados['id'];?>">Sim, quero excluir este livro.</a>

                                    </div>
                                  </div>
                     </tr>

                 <?php endwhile; ?>

                </tbody>

            </table>
            <br>

            <a href="adicionar.php" class="btn">Adicionar Livro</a>


		</div>



	</div>

<?php
//footer
include_once 'includes/footer.php';
?>