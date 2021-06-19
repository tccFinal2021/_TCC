<?php

if(isset($_POST["btnCadastrar"]))
{
   
        require_once 'UsuarioController.php';
        $uController = new UsuarioController();

        if ($uController->inserir($_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"], $_POST["txtSenha"]))
        {
            include_once '../VIEW/cadastroRealizado.php';
        }
        else {
            include_once '../VIEW/cadastroNRealizado.php';
        }
      }
      else{
          if(isset($_POST["btnCadRealizado"]))
          {
              include_once '../VIEW/principal.php';
          }
          else
          {
              if(isset($_POST["btnCadNRealizado"]))
          {
              include_once '../VIEW/primeiroAcesso.php';
          }
      
      else 
      {       
        include_once'../View/login.php';
      }
     }
    }    

?>