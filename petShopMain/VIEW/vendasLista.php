<?php
    include_once 'header.php';


    include_once '../MODEL/produto.php';
              include_once '../CONTROLLER/produtoController.php';
                $produto = new Produto();
                $results = $produto->listaProdutos();
                if($results != null)
                
                while($row = $results->fetch_object()) {
                
               
 echo '
 <section style="display: inline-block;">
 <div class="container mt-4" id="corpoPetShopHome">
   <div class="row" id="firstRowCard">
     <div class="card col-sm-12 col-md-5 col-lg-3 m-4" id="firstCard">
            <img
              class="card-img-top img-fluid"
              src="'.$row->imgurl.'"
                style="width: 18rem"
            />
            
            <div class="card-body">
              <h5 class="card-title">'.$row->nome.'</h5>
              <p class="card-text" style="font-size: 14px;" >
              '.$row->descricao.'
              </p>
            </div>

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Quantidade em estoque: '.$row->quantidade_estoque.'</li>
              <li class="list-group-item">Preço: R$'.$row->valor.'</li>
              <li class="list-group-item">Marca: '.$row->marca.'</li>
            </ul>

            <div class="card-body">
              <button
                class="btn btn-outline-success"
                id="loginButton"
                type="button"
              >

                Comprar
              </button>
            </div>
          </div>'
          ;  }?>