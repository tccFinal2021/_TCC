<!--link para o css e título padrao para pag de blog  -->

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Pet shop | TCC</title>
  </head>
  <body>
    <header class="" id="headerPetShopHome">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../tttt.html">Petshop</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarColor01"
          aria-controls="navbarColor01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../tttt.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adote.php">Adote um pet</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vendas.php">Vendas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inserirDoacao.php">Doe um pet</a>
            </li>
          </ul>
          <form action="inserirBlog.php"><button id="cadButton" class="btn btn-light my-2 my-sm-0 mr-2" type="submit">Blog</button></form>
          <form action="signin.php">
            <button
              id="cadButton"
              class="btn btn-light my-2 my-sm-0 mr-2"
              type="submit"
            >
              Entrar
            </button>
          </form>
          <form action="signup.php">
            <button
              id="cadButton"
              class="btn btn-light my-2 my-sm-0"
              type="submit"
            >
              Cadastrar
            </button>
          </form>
        </div>
      </nav>
    </header>