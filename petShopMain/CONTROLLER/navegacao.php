<?php


if(!isset($_SESSION))
{ 
    session_start(); 
} 

    //botao de cadastro de usuário
    if(isset($_POST["btnCadastrar"]))
    {
      
            require_once '../Controller/UsuarioController.php';
            $uController = new UsuarioController();
    
            if($uController->inserir($_POST["txtNome"], $_POST["txtSobrenome"], date('Y-m-d', strtotime($_POST['txtDataNasc'])), $_POST["txtEmail"], 
            $_POST["txtSenha"]))
            { 
                header("location:../View/cadastroRealizado.php")
            or die("não ignore meu header");
            }
            else
            {
                header("location:../View/cadastroNRealizado.php")
            or die("não ignore meu header");
            }
    } 
    else{
        if(isset($_POST["btnCadRealizado"]))
        {
            header("location:tttt.php")
            or die("não ignore meu header");
        }
        else{
            if(isset($_POST["btnCadNRealizado"]))
            {
                include_once '../View/signup.php';
            }     
        }
    }  

//botao para chamar formulario de cadastro de produto

if (isset($_POST["btnFormProd"])){
    header("location:../VIEW/inserirProduto.php")
            or die("não ignore meu header");
   
}

//botao de cadastrar produto no  bd
if(isset($_POST["btnInserirProd"]))
{
    require_once '../CONTROLLER/produtoController.php';
    $pController = new ProdutoController();

    if($pController->inserir($_POST["txtImgUrl"], $_POST["txtCodEmbalagem"], $_POST["txtNomeProd"], date('Y-m-d', strtotime($_POST['dataValidade'])), 
    $_POST["txtQuantidadeProd"], $_POST["txtValorProd"], $_POST["txtMarcaProd"], $_POST["txtDescProd"]))
    { 
        header("location:../View/cadastroRealizado.php")
            or die("não ignore meu header");
    
    }
    else
    {
        header("location:../View/cadastroNRealizado.php")
        or die("não ignore meu header");
    }

}


//botao de login para adm chama a pag de login de adm
if(isset($_POST["btnLogarAdm"]))
{
    header("location:../VIEW/ADMLogin.php")
            or die("não ignore meu header");
}


// verificando se adm está cadastrado
if(isset($_POST["btnLogandoAdm"]))
{
 require_once '../Controller/admController.php';
 $aController = new AdmController();
 
 if($aController->login($_POST["txtEmailADM"], $_POST["txtSenhaADM"]))
 { 
    include_once '../VIEW/admPrincipal.php';
 }
 else
 {
 
 }
}


//click do botao que chama lista de usuarios cadastrados
if (isset($_POST["btnListaUsuariosCadastrados"])){
    header("Location: ../VIEW/listaUsuariosCad.php") 
    or die("não ignore meu head");
}
//click do botao que chama lista de ADM cadastrados
if (isset($_POST["btnListaAdmCadastrados"])){
    header("Location: ../VIEW/listaAdmCadastrados.php") 
    or die("não ignore meu head");
}
//click do botao que chama lista de Postagens do blog
if (isset($_POST["btnListaPost"])){
    header("Location: ../VIEW/listaPostagens.php") 
    or die("não ignore meu head");
}
//click do botao que chama lista de Animais cadastrados
if (isset($_POST["btnListaAnimais"])){
    header("Location: ../VIEW/listaAnimaisCadastrados.php") 
    or die("não ignore meu head");
}
//click do botao que chama lista de Produtos cadastrados
if (isset($_POST["btnListarProdutos"])){
    header("Location: ../VIEW/listaProdutosCadastrados.php") 
    or die("não ignore meu head");
}
//click do botao que chama lista de Recebedores de Novidades
if (isset($_POST["btnListaRecebedores"])){
    header("Location: ../VIEW/listaRecebedores.php") 
    or die("não ignore meu head");
}


//click do botao btnVoltarHome da lista de cadastrados
if (isset($_POST["btnVoltarHome"])){
    header("location:../VIEW/admPrincipal.php")
     or die("não ignore meu header");
}

//botao de link para form de novo adm
if (isset($_POST["btncadastroAdm"])){
    header("location:../VIEW/cadAdmForm.php")
     or die("não ignore meu header");
     
}

//botao de cadastro de novo admim
if (isset($_POST["btnCadastrarAdm"])){
    require_once 'admController.php';
    $aController = new admController;
    if($aController->inserirBD($_POST["txtNome"], $_POST["txtSobrenome"], date('Y-m-d', strtotime($_POST['txtDataNasc'])), $_POST["txtEmail"], 
    $_POST["txtSenha"]))
    { 
        include_once '../VIEW/cadastroRealizado.php';
    }
    else
    {
        include_once '../VIEW/cadastroNRealizado.php';
    }
}

//botao de cadastro para recebedor de novidades

         if (isset ($_POST["btnReceberNovdd"])){
            require_once 'receberNovddController.php';
            $rcontroller = new recebedorController;
            if($rcontroller->inserirBDR($_POST["txtNome"], $_POST["txtEmail"])){
           
         }
         header("location:../tttt.php")
     or die("não ignore meu header");
    }

//botao que chama a opção de cadastrar pet para adoção
if(isset($_POST["btnCadPetForm"]))
    {
        header("location:../VIEW/inserirDoacao.php")
     or die("não ignore meu header");

    }


    //inserir animal

    if(isset($_POST["btnCadPet"]))
    {
        require_once 'animalController.php';
        $aController = new AnimalController();
        
        if (isset($_POST["txtSexof"])){
            $sexo = "F";
        } else{
            if (isset($_POST["txtSexom"])){
                $sexo = "M";
            }
        }
        
        if($aController->inserirBDA($_POST["txtNome"], $_POST["txtEmail"],$_POST["txtTel"], $_POST["txtCaracteristicas"], 
        $_POST["txtSaude"], $sexo)){ 
            include_once '../View/cadastroRealizado.php';
        }
        else
        {
            include_once '../View/cadastroNaoRealizado.php';
        }

    }
    else{
        if(isset($_POST["btnCadRealizado"]))
        {
            include_once '../View/principal.php';
        }
        else{
            if(isset($_POST["btnCadNRealizado"]))
            {
                include_once '../View/signup.php';
            }     
        }
    } 


    // inserir artigo de blog

    if (isset($_POST["btnSalvarPost"])){
        require_once 'blogController.php';
        $bController = new BlogController();
        
        if ($bController->inserirBDBlog($_POST["txtTituloBlog"], $_POST["txtDescCard"], $_POST["txtImgUrl"], $_POST["txtDescPost"])){
            
            header("location: ../VIEW/cadastroRealizado.php")
             or die("deixe meu head em paz");
        }
    }



?>
