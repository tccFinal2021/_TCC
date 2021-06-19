<?php
    include_once 'headerAdm.php';
?>
<!--
<section>
      <div class="container mt-4" id="corpoPetShopHome">
        <div class="row" id="firstRowCard">
          <div class="card col-sm-12 col-md-5 col-lg-3 m-4" id="firstCard">
            <img
              class="card-img-top img-fluid"
              src="img/racaocat1.jpg"
              alt="Card image cap"
              style="width: 18rem"
            />
            <div class="card-body">
              <h5 class="card-title"><?php echo $row->nome?></h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Quantidade em estoque: XXX</li>
              <li class="list-group-item">Preço: R$XXX</li>
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
          </div>
        </div>
      </div>
</section>
-->
<style>
    thead{
        background-color: #d3d3d3;
    }
    #tabela{
        margin-left: 20px;
        margin-right: 20px;
        width: 98%;
    }
    .column{ 
      padding: 10px;
      border: 1px solid while;
    }
</style>

<header class="w3-container w3-padding-32 w3-center " >
    <h1 class="w3-text-white w3-panel  w3-round-large" style="background-color: #007BFF;">
        Lista de Produtos Cadastrados no Sistema    
    </h1>
 </header>

<div class=" w3-content w3-text-black " style="background-color: #007BFF;" >
    <div class="w3-container"id="tabela" >
        <table class="w3-table-all w3-centered " >
            <thead> 
            <tr class="w3-center w3-text-black" style="background-color: #007BFF;">
            <th class="column w3-text-white">Id</th>
            <th class="column w3-text-white">Código</th>
            <th class="column w3-text-white">Nome</th>
            <th class="column w3-text-white">Data de Validade</th>
            <th class="column w3-text-white">Quantidade em Estoque</th>
            <th class="column w3-text-white">Valor</th>
            <th class="column w3-text-white">Marca</th>
            <th class="column w3-text-white">descrição</th>
            </tr>
            <thead>
<?php
              include_once '../MODEL/produto.php';
              include_once '../CONTROLLER/produtoController.php';
                $produto = new Produto();
                $results = $produto->listaProdutos();
                if($results != null)
                
                while($row = $results->fetch_object()) {
                echo '<tr>';
                echo '<td  class="column "style="width: 5%;">'.$row->cod_produto.'</td>';
                echo '<td  class="column"style="width: 5%;">'.$row->imgurl.'</td>';
                echo '<td  class="column"style="width: 5%;">'.$row->cod_embalagem.'</td>';
                echo '<td  class="column"style="width: 5%;">'.$row->nome.'</td>';
                echo '<td  class="column"style="width: 5%;">'.$row->validade.'</td>';
                echo '<td  class="column"style="width: 5%;">'.$row->quantidade_estoque.'</td>';
                echo '<td  class="column"style="width: 5%;">'.$row->valor.'</td>';
                echo '<td  class="column"style="width: 10%;">'.$row->marca.'</td>';
                echo '<td  class="column"style="width: 60%;">'.$row->descricao.'</td>';
                echo '</tr>';
                } 
                ?>
            </thead>
            </thead>
        </table>
    </div>
</div>


<div class="w3-padding-128 w3-content w3-text-grey">
    <form action="../CONTROLLER/navegacao.php" method="post" class="w3-container w3-light-grey w3-textblue w3-margin w3-center" style="width: 30%;">
        <div class="w3-row w3-section">
            <div>
                <button name="btnVoltarHome" class="w3-button w3-block w3-margin  w3-cell w3-roundlarge" style="width: 90%; background-color: #007BFF;">
                Voltar
                </button>
            </div>
        </div>
    </form>
</div>
                <?php
                include_once 'bota.php';
                ?>