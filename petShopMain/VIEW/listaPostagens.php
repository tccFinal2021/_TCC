<?php
    include_once 'headerAdm.php';
?>

<style>
    thead{
        background-color: #d3d3d3;
    }
    #tabela{
        margin-left: 20px;
        margin-right: 20px;
        width: 98%;
    }
    .column{ padding: 10px;

    }
</style>

<header class="w3-container w3-padding-32 w3-center " >
    <h1 class="w3-text-white w3-panel  w3-round-large"style="background-color: #007BFF;">
        Lista de Postagens do Blog    
    </h1>
 </header>

<div class=" w3-content w3-text-grey "style="background-color: #007BFF;" >
    <div class="w3-container"id="tabela" >
        <table class="w3-table-all w3-centered " >
            <thead> 
            <tr class="w3-center "style="background-color: #007BFF;">
            <th class="column w3-text-white">Id</th>
            <th class="column w3-text-white">Título</th>
            <th class="column w3-text-white">Descritivo Card</th>
            <th class="column w3-text-white">url Imagem</th>
            <th class="column w3-text-white">Descritivo da Postagem</th>
            </tr>
            <thead>
<?php
              include_once '../MODEL/blog.php';
              include_once '../CONTROLLER/blogController.php';
                $post = new Blog();
                $results = $post->listarPostagens();
                if($results != null)
                
                while($row = $results->fetch_object()) {
                echo '<tr>';
                echo '<td  class="column"style="width: 5%;">'.$row->id.'</td>';
                echo '<td  class="column"style="width: 10%;">'.$row->titulo.'</td>';
                echo '<td  class="column"style="width: 30%;">'.$row->desccard.'</td>';
                echo '<td  class="column"style="width: 5%;">'.$row->imgurl.'</td>';
                echo '<td  class="column"style="width: 30%;">'.$row->descpost.'</td>';
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