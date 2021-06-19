<?php




if(!isset($_SESSION))
{ 
    session_start(); 
} 


    if(isset($_POST["btnReceberNovdd"]))
    {
        require_once '../CONTROLLER/receberNovddController.php';
        $rController = new recebedorController;
        if($rController->inserirBDR($_POST["txtNome"], $_POST["txtEmail"]))
        { 
               include_once '../VIEW/cadastroRealizado.php';
        }
       else {
           include_once '../VIEW/cadastroNRealizado.php';
       }
    }

    
?>