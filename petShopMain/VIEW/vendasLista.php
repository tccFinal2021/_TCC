
<?php
    include_once 'header.php';
?>
<style >
  .container{
    height: 100%;
    width: 100%;
    margin-top: 10px;  
    padding: 10px;
    display: flex;
    flex-wrap: wrap;
    
  }
  .card{
   
    
    border-radius:5px;
    padding: 10px;
    margin: 10px;
    box-shadow: 5px 5px 5px 5px grey;
   
  }
  .card img{
    width: 250px;
    height: 250px;
  }
</style>



<?php
    include_once '../MODEL/produto.php';
              include_once '../CONTROLLER/produtoController.php';
                $produto = new Produto();
                $results = $produto->listaProdutos();
                if($results != null)
              



              echo '  <div class="container" >';
                while($row = $results->fetch_object()) {

                 
                    echo '
                
                    <div class="card" style=" width: 30%; height: 580px;">

                      <img 
                        src="'.$row->imgurl.'"
                        alt="'.$row->imgurl.'"
                          style="width: 18rem"
                      />
                    
                      <div >
                        <h5 style="border:solid 1px grey; border-radius:5px;" class="w3-center">'.$row->nome.'</h5>
                        <p  style="font-size: 14px;" class="w3-center" >
                        '.$row->descricao.'
                        </p>
                      </div>
                      <div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item w3-center">Quantidade em estoque: '.$row->quantidade_estoque.'</li>
                          <li class="list-group-item w3-center">Preço: R$'.$row->valor.'</li>
                          <li class="list-group-item w3-center">Marca: '.$row->marca.'</li>
                        </ul>
                      </div>

                      <div class="card-body" >
                        <button 
                          class="btn btn-outline-success"
                          id="loginButton"
                          type="button">
                          Comprar
                        </button>
                      </div>
                    
                    </div>';
                  

                }
                echo '</div>';
                              
 /*echo '
 
      <div>
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
                type="button">
                Comprar
              </button>
            </div>
        </div>'; 
        
        
      }*/
      ?>