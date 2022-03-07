<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Consulta</title>
  </head>
  <body>

    <?php
      $consulta = $_POST['busca'] ?? '';
      
      include "connection.php";

      $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$consulta%'";

      $dados = mysqli_query($mysqli, $sql);
      ?>
    
    <div class="container">
      <div class="row">
        <div class="col">
          
          <h1>Consultar</h1>

          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="consulta.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Digite o nome" aria-label="Search" name="busca" autofocus>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
          </nav>

          <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Email</th>
                <th scope="col">Telefône</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Funções</th>
              </tr>
            </thead>
            <tbody>

              <?php
                while ($linha = mysqli_fetch_assoc($dados)) {
                  $cod_pessoa = $linha['cod_pessoa'];
                  $nome = $linha['nome'];
                  $endereco = $linha['endereco'];
                  $email = $linha['email'];
                  $telefone = $linha['telefone'];
                  $data_nascimento = $linha['data_nascimento'];

                  echo "<tr>
                    <th scope='row'>$nome</th>
                    <td>$endereco</td>
                    <td>$email</td>
                    <td>$telefone</td>
                    <td>$data_nascimento</td>

                    <td width='150px'>
                      <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
                      <a href='excluir_script.php?id=$cod_pessoa' class='btn btn-danger btn-sm'>Editar</a>
                    </td>
                  </tr>";
                }
              ?>
              
            </tbody>
          </table>

          <a href="index.php" class="btn btn-primary">Voltar a tela inicial</a>
        </div>
      </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>