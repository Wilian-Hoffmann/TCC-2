<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">

    <title>ola mundo</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Demanda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="#" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastro de demanda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Lista de demanda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar2">Em Andamento</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
            include("conexao.php");
             switch(@$_REQUEST["page"]){
            case "novo":
              include("cadastro_demanda.php");
            break;
            case "listar":
                include("lista_demanda.php");
              break;
            case "salvar":
                include("salvar_demanda.php");
              break;
              case "editar":
                include("editar_demanda.php");
              break;
              case "listar2":
                include("lista_andamento.php");
              break;
            default:
            print "bem vindo";
            }
        ?>

        </div>
    </div>
</div>


    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>