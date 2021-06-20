<?php
include_once '../MODEL/adm.php';
include_once '../CONTROLLER/admController.php';
 if(!isset($_SESSION)) 
 { 
 session_start(); 
 }
?>

<!DOCTYPE html>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pet shop | TCC - Administrador</title>
  </head>
  <body>

  <style>
             
              .menu {
                  color: #007BFF;
                  list-style: none;
                  background-color: #007BFF;
                  width: 100%;
                  height: 80px;
                  text-align: center;
                  flex-direction: row; 
              }
              .menu button:hover {
                
                  transform: scale(1.5); transition-delay: 0.3s;
              }
              .menu button{
                  border: solid black 0.1px ;
                  display: flex;
                  flex-direction: row;  
                  display: inline-block;
              }
              
               

            </style>


    <main class="main">
      <div class="" id="headerPetShopHome">        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="admPrincipal.php">Petshop</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarColor01"
            aria-controls="navbarColor01"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="admPrincipal.php"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="adote.php">Adote um pet</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="vendasLista.php">Vendas</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="inserirDoacao.php">Doe um pet</a>
              </li>
             
            </ul>

      
          </div>
        </nav>

      </div>

          <div class="menu ">
            
              <form action="../CONTROLLER/navegacao.php"  method="post"  >

                <button name="btnLogarAdm" class="btn btn-light " type="submit">
                Entrar</button>                

                <button name="btnListaAdmCadastrados" class="btn btn-light">
                Listar Adm Cadastrados
                </button>

                <button name="btnListaAnimais" class="btn btn-light">
                Listar Animais Cadastrados
                </button>

                <button name="btnListarProdutos" class="btn btn-light "  >
                Listar Produtos Cadastrados
                </button>

                <button name="btnListaUsuariosCadastrados" class="btn btn-light "  >
                Listar Usuários Cadastrados
                </button>

                <button name="btnListaRecebedores" class="btn btn-light "  >
                Listar Recebedores de Novidades
                </button>

                <button name="btnListaPost" class="btn btn-light " type="submit">
                 Lista de Post</button>
                <button name="btncadastroAdm" class="btn btn-light ">
                Novo Adm</button>
                          
                <button name="btnFormProd" class="btn btn-light ">
                Novo Produto</button>
              </form>

            </div>