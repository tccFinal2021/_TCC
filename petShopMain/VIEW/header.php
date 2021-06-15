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
    <main class="">
      <header class="" id="headerPetShopHome">        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="../tttt.php">Petshop</a>
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
              <li name="btnHome"class="nav-item active">
                <a class="nav-link" href="../tttt.php"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li name="btnAdote" class="nav-item">
                <a class="nav-link" href="adote.php">Adote um pet</a>
              </li>
              <li name="btnBlog" class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li name="btnVendas"class="nav-item">
                <a class="nav-link" href="vendas.php">Vendas</a>
              </li>
              <li name="btnHome" class="nav-item">
                <a class="nav-link" href="inserirDoacao.php">Doe um pet</a>
              </li>
            </ul>
            
            <form action="../CONTROLLER/navegacao.php">
            <input id="logarButton" class="btn btn-light my-2 my-sm-0 mr-2" type="submit" value="Entrar">
            </form>
            <form action="../CONTROLLER/navegacao.php">
            <input id="cadastrarButton" class="btn btn-light my-2 my-sm-0" type="submit" value="Cadastrar">
            </form>
          </div>
        </nav>
      </header>