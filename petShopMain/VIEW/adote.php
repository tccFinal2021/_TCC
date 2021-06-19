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


<section class="container">
      <div class="row">
        <div class="card col-md-12 col-lg-5 m-4" id="firstCard">
          <img
            class="card-img-top img-fluid"
            src="https://d17fnq9dkz9hgj.cloudfront.net/uploads/2017/10/PF2015_267_Kittens_Shelter-630.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <h4 class="card-title">Veja os gatos</h4>
            <p class="card-text">
              Se você está querendo adotar um gato, tem um te esperando aqui.
            </p>
          </div>
          <div class="card-body">
            <form action="../CONTROLLER/navegacao.php">
              <button
                class="btn btn-outline-success"
                id="loginButton"
                type="button"
              >
                Procurar gatos
              </button>
            </form>
          </div>
        </div>

        <div class="card col-md-12 col-lg-5 m-4" id="secondCard">
          <img
            class="card-img-top img-fluid"
            src="https://images.squarespace-cdn.com/content/v1/53bb46d6e4b05c06d49b574b/1584922821908-NGKK7OKW5HBQUV9FJNHJ/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/Jaden_crop.jpg?format=2500w"
            alt="Card image cap"
          />
          <div class="card-body">
            <h4 class="card-title">Veja os cães</h4>
            <p class="card-text">
              Se você está querendo adotar um cão, tem um te esperando aqui.
            </p>
          </div>
          <form action="../CONTROLLER/navegacao.php" method="post">
            <button name="btnCadPet" class="btn btn-outline-success">
              Cadastrar
            </button>
          </form>
        </div>
      </div>
    </section>

<?php
    include_once 'bota.php';
?>