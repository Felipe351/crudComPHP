<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Alteração de Dados</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <?php
          include "connection.php";

          $id = $_POST['id'];
          $nome = $_POST['nome'];
          $endereco = $_POST['endereco'];
          $email = $_POST['email'];
          $telefone = $_POST['telefone'];
          $data_nascimento = $_POST['data_nascimento'];

          $sql = "UPDATE `pessoas` SET `nome` = '$nome', `endereco` = '$endereco', `email` = '$email', `telefone` = '$telefone', `data_nascimento` = '$data_nascimento' WHERE cod_pessoa = $id";

          if (mysqli_query($mysqli, $sql)) {
            echo "Dados de $nome alterado com sucesso";
          } else
            echo "erro na alteração de dados";
        ?>
        <a href="index.php" class="btn btn-primary">Voltar a tela inicial</a>
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