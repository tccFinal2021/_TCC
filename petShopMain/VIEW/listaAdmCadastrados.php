<?php
include_once 'headerAdm.php';
?>

 <header class="w3-container w3-padding-32 w3-center " >
    <h1 class="w3-text-white w3-panel w3-round-large" style="background-color: #007BFF;">
        Lista de Administradores Cadastrados no Sistema
    </h1>
 </header>

 <div class="w3-padding-128 w3-content w3-text-grey "style="background-color: #007BFF;" >
    <div class="w3-container">
        <table class="w3-table-all w3-centered " >
            <thead> 
            <tr class="w3-center w3-text-white "style="background-color: #007BFF;">
            <th>Código</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Data de Nascimento</th>
            <th>Email</th>
            <th>Senha</th>
            </tr>
            <thead>


            <?php
              include_once '../MODEL/adm.php';
              include_once '../CONTROLLER/AdmController.php';
                $user = new Adm();
                $results = $user->listaAdm();
                if($results != null)
                
                while($row = $results->fetch_object()) {
                echo '<tr>';
                echo '<td style="width: 5%;">'.$row->id.'</td>';
                echo '<td style="width: 50%;">'.$row->nome.'</td>';
                echo '<td style="width: 50%;">'.$row->sobrenome.'</td>';
                echo '<td style="width: 50%;">'.$row->datanasc.'</td>';
                echo '<td style="width: 50%;">'.$row->email.'</td>';
                echo '<td style="width: 50%;">'.$row->senha.'</td>';
                echo '</tr>';
                } 
                ?>


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



</body>
</html>