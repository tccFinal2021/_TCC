<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
 <title>Usuários Cadastrados</title>
</head>
<body>
 

 <header class="w3-container w3-padding-32 w3-center " >
    <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
        Lista de Administradores Cadastrados no Sistema
    </h1>
 </header>

 <div class="w3-padding-128 w3-content w3-text-grey" >
    <div class="w3-container">
        <table class="w3-table-all w3-centered " >
            <thead> 
            <tr class="w3-center w3-cyan">
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
                <button name="btnVoltarHome" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">
                Voltar
                </button>
            </div>
        </div>
    </form>
</div>



</body>
</html>