<?php
    include_once 'header.php';
?>

<style >
    
    .container{
    height: 100%;
    width: 100%;  
    padding: 10px;
    display: flex;
    flex-wrap: wrap;
    
  }
  .card{
   
    height: 650px;
    border-radius:5px;
    margin: 10px;
    box-shadow: 5px 5px 5px 5px grey;
   
  }
  .card img{
    width: 240px;
    height: 250px;
  }
</style>



<header class="w3-container w3-padding-32 w3-center " >
    <h1 class="w3-text-white w3-panel w3-round-large w3-center" style="background-color: #007BFF;">
        Gatos Aguardando Uma Nova Família
    </h1>
 </header>

<div class=" w3-content w3-text-grey">
    <div class="w3-container">
        
      <?php
              include_once '../MODEL/animal.php';
              include_once '../CONTROLLER/animalController.php';
              $animal = new Animal();
              $results = $animal->listarGatos();
              if($results != null)
                
              echo '<div class="container w3-container" >';
              while($row = $results->fetch_object()) {
               
                  ///////incluindo cards
                  echo '
                    <div class="card" style=" width: 30%; height: 640px;">

                      <img 
                        src="'.$row->imgurl.'"
                        alt="'.$row->imgurl.'"
                        style="width: 18rem"
                      />
                    
                      <div >
                        <h5 style="border:solid 1px grey; border-radius:5px;" class="w3-center">'.$row->nome.'</h5>
                        <p  style="font-size: 14px;" class="w3-center" >
                        '.$row->email.'
                        </p>
                        <p  style="font-size: 14px;" class="w3-center" >
                        '.'TEL:'.$row->tel.'
                        </p>
                      </div>

                      <div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item w3-center">Espécie: '.$row->especie.'</li>
                          <li class="list-group-item w3-center">Características: '.$row->caracteristicas.'</li>
                          <li class="list-group-item w3-center">Saúde: '.$row->saude.'</li>
                          <li class="list-group-item w3-center">Sexo: '.$row->sexo.'</li>
                        </ul>
                      </div>

                      <div class="card-body" >
                        <button 
                          class="btn btn-outline-success"
                          id="btnEscolhaAdocao"
                          type="button">
                          Adotar
                        </button>
                      </div>
                    
                    </div>';

                } 
                echo '</div>';
        ?>            
    </div>
</div>

<div class="w3-padding-128 w3-content w3-text-grey ">
    <form action="../CONTROLLER/navegacao.php" method="post" class="w3-container w3-light-grey w3-text-blue w3-margin w3-center" style="width: 30%;">
        <div class="w3-row w3-section">
            <div>
                <button name="btnVoltarHomeNormal" class="w3-button w3-block w3-margin  w3-cell w3-round-large" style="width: 90%; background-color: #007BFF;">
                Voltar
                </button>
            </div>
        </div>
    </form>
</div>

<?php
  include_once 'bota.php';
 ?>