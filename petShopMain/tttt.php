<?php
 include_once 'MODEL/usuario.php';
 if(!isset($_SESSION)) 
 { 
 session_start(); 
 }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="VIEW/css/app.css" />
    <link rel="stylesheet" href="VIEW/css/mobile.css" />
    <link rel="stylesheet" href="VIEW/css/bootstrap.min.css" />
    <title>Pet shop | TCC</title>
  </head>
  <body>
    <main class="">
      <header class="" id="headerPetShopHome">        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="tttt.php">Petshop</a>
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
              <li class="nav-item active">
                <a class="nav-link" href="tttt.php"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="VIEW/adote.php">Adote um pet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="VIEW/blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="VIEW/vendas.php">Vendas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="VIEW/inserirDoacao.php">Doe um pet</a>
              </li>
            </ul>
            <form action="CONTROLLER/navegacao.php" method="$_POST">
              <button id="logarButton" class="btn btn-light my-2 my-sm-0 mr-2" type="submit">Entrar</button>
            </form>
            <form action="CONTROLLER/signout.php">
              <button id="cadastrarButton" class="btn btn-light my-2 my-sm-0" type="submit">Cadastrar</button>
            </form>
          </div>
        </nav>
      </header>

<section id="home-info" class="back-light">
        <div class="info-img"></div>
        <div class="info-content">
          <h2><span id="textPrimary">Visite</span> nosso blog</h2>
          <br>
          <h5> Fique por dentro das noticias do mundo dos pets e confira as novidades quais podem ajudar você cuidar do seu pet.</h5>
          <a href="VIEW/blog.php" class="btn btn-light">Visite o blog</a>
        </div>
      </section>

      <section id="sell-info" class="back-light">
        <div class="info-content">
          <h2><span id="textPrimary">Melhores</span> produtos</h2>
          <br>
          <h5>Confira os melhores produtos para alimentar, entreter e cuidar da saude do seu pet.</h5>
          <a href="VIEW/vendas.php" class="btn btn-light"
            >Compre nossos produtos para seu pet</a
          >
        </div>
        <div class="info-img"></div>
      </section>

      
    </main>

    <div class="" id="footerPetShopHome">
        <div class="">
          <nav
            class="d-flex justify-content-center navbar navbar-expand-lg navbar-dark bg-primary"
>
            <h3>Receba Nossas Novidades</h3>
            <div class="text-center">
              <form action="CONTROLLER/navegacao.php" method="post" class="form-inline" >
                <div class="input-group">
                  <input
                    type="text"
                    name="txtNome"
                    class="form-control m-2"
                    placeholder="Nome"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                  />
                  <input
                    type="text"
                    name="txtEmail"
                    class="form-control m-2"
                    placeholder="Email"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                  />
                  <button name="btnReceberNovdd" class="btn"  >Cadastrar</button>
                 
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
    <footer id="main-footer">
      <p>Pet shop TCC &copy; 2021, Todos direitos reservados</p>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-3.6.0.slim.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>