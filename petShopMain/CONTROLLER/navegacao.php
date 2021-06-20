<?php
include_once '../View/header.php';


if(!isset($_SESSION))
{ 
    session_start(); 
} 
    if(isset($_POST["btnCadastrar"]))
    {
        require_once '../Controller/UsuarioController.php';
        $uController = new UsuarioController();
 
        if($uController->inserirBD($_POST["txtNome"], $_POST["txtSobrenome"], $_POST["txtEmail"], 
        $_POST["txtSenha"]))
        { 
            include_once '../View/cadastroRealizado.php';
        }
        else
        {
            include_once '../View/cadastroNRealizado.php';
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


    //botao de cadastro para recebedor de novidades

         if (isset ($_POST["btnReceberNovdd"])){
            require_once 'receberNovddController.php';
            $rcontroller = new recebedorController;
            if($rcontroller->inserirBDR($_POST["txtNome"], $_POST["txtEmail"])){
           
         }
 include_once '../tttt.php';
    }





    //Inserir doação de animal
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
        
        if($aController->inserirBDA($_POST["txtNome"], $_POST["txtSaude"],$_POST["txtEmail"], 
        $_POST["txtTel"])){ 
            include_once '../View/cadastroRealizado.php';
        }
        else
        {
            include_once '../View/cadastroNRealizado.php';
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
            include_once '../VIEW/cadastroRealizado.php';
        }
    }
    // Inserir cadastro de usuário
    if (isset($_POST["btnCadastrar"])){

        require_once 'usuarioController.php';
        $uController= new UsuarioController();
        if($uController->inserirBD($_POST["txtNome"], $_POST["txtSobrenome"], $_POST["txtEmail"], $_POST["txtSenha"])){           
            include_once '../View/cadastroRealizado.php';
        }
        else
        {
            include_once '../View/cadastroNaoRealizado.php';
        }
   
    }
    // Fazer Login do usuário
    if (isset($_POST["btnLogar"])){

        require_once 'usuarioController.php';
        $uController= new UsuarioController();
        if($uController->logarBD($_POST["txtEmail"], $_POST["txtSenha"])){           
            echo '
            <a href="../index.php">
            <h1 class="w3-button w3-teal">'.$_SESSION['nome'].', Seja Bem Vindo(a)! </h1>
            </a>
            ';
        }
        else
        {
            echo '<a href="../index.php"><h1 class="w3-button w3-teal">Login Inválido! </h1></a>';
        }
   
    }
    //reforçando o direcionamento dos botões do menu
        elseif(isset($_POST["headerPetShopHome"])){
            include_once '../tttt.php';
        }
        elseif(isset($_POST["btnHome"])){
            include_once '../tttt.php';
        }
        elseif(isset($_POST["btnAdote"])){
            include_once '../VIEW/adote.php';
        }
        elseif(isset($_POST["btnBlog"])){
            include_once '../VIEW/blog.php';
        }
        elseif(isset($_POST["btnVendas"])){
            include_once '../VIEW/vendas.php';
        }
        elseif(isset($_POST["btnDoarPet"])){
            include_once '../VIEW/inserirDoacao.php';
        }

        // ação do btnReceberNovdd onde é chamado o controle e criado um obj do tipo 
        if(isset($_POST['btnReceberNovdd'])){
            require_once '../CONTROLLER/receberNovddController.php';
            $uController = new receberNovddController();

            //chamada do método inserirBDRecebedor recebendo os valores via $_POST
            if($uController->inserirBDRecebedor($_POST["nome"], $_POST["email"]))
            {
                echo 'FUNCIONOOOOU';
                //include_once '../tttt.php';
            }
        }


/*
if(isset($_POST["btnAtualizar"]))
 {
    require_once '../Controller/UsuarioController.php';
 
    $uController = new UsuarioController();
 
    if($uController->atualizar($_POST["txtID"], $_POST["txtNome"], 
    $_POST["txtSobrenome"], $_POST["txtEmail"],
    date('Y-m-d', strtotime($_POST['txtData']))))
    { 
        include_once '../View/atualizacaoRealizada.php';
    }
    else
    {
        include_once '../View/operacaoNaoRealizada.php';
    }
 
    }

    if(isset($_POST["btnAtualizacaoCadastro"]) || isset($_POST["btnOperacaoNRealizada"]) || isset($_POST["btnInfInserir"]))
    {
    include_once '../View/principal.php';
    }
//login
    if(isset($_POST["btnLogin"]))
    {
        require_once 'UsuarioController.php';
    
        $uController = new UsuarioController();
    
        if($uController->login($_POST['txtLogin'], $_POST['txtSenha']))
        { 
            include_once '../View/principal.php';
        }
        else
        {
            include_once '../View/cadastroNaoRealizado.php';
        }
    }

    if(isset($_POST["btnAddFormacao"]))
    {
        require_once '../Controller/FormacaoAcadController.php';
        include_once '../Model/Usuario.php';
        $fController = new FormacaoAcadController();
        
        if($fController->inserir(date('Y-m-d', strtotime($_POST['txtInicioFA'])), date('Y-m-d', 
        strtotime($_POST["txtFimFA"])), $_POST["txtDescFA"], unserialize($_SESSION['Usuario'])->getID()) != 
        false)
        { 
            include_once '../View/informacaoInserida.php';
        }
        else
        {
            include_once '../View/operacaoNaoRealizada.php';
        }
    }



    if(isset($_POST["btnExcluirFA"]))
 {
 require_once '../Controller/FormacaoAcadController.php';
 include_once '../Model/Usuario.php';
 
 $fController = new FormacaoAcadController();
 if($fController->remover($_POST['id']) == true)
 { 
 include_once '../View/informacaoExcluida.php';
 }
 else
 {
 include_once '../View/operacaoNaoRealizda.php';
 }
 
 }
 if(isset($_POST["btnPrincipal"]) || isset($_POST["btnAtualizacaoCadastro"]) || 
 isset($_POST["btnCadRealizado"])
  || isset($_POST["btnInfInserir"]) || isset($_POST["btnInfExcluir"]))
  {
  include_once '../View/principal.php';
  }



  //inserir

if(isset($_POST["btnAddEP"]))
{
require_once '../Controller/ExperienciaProfissionalController.php';
include_once '../Model/Usuario.php';
 
$epController = new ExperienciaProfissionalController();
 
if($epController->inserir(date('Y-m-d', strtotime($_POST['txtInicioEP'])), date('Y-m-d', 
strtotime($_POST["txtFimEP"])), $_POST["txtEmpEP"], $_POST["txtDescEP"], 
unserialize($_SESSION['Usuario'])->getID()) != false)
{ 
 include_once '../View/informacaoInserida.php';
}
else
 {
 include_once '../View/operacaoNRealizada.php';
 } 
}

//excluir

if(isset($_POST["btnExcluirEP"]))
{
require_once '../Controller/ExperienciaProfissionalController.php';
include_once '../Model/Usuario.php';
 
$epController = new ExperienciaProfissionalController();
 
if($epController->remover($_POST['idEP']) == true)
{ 
 include_once '../View/informacaoExcluida.php';
}
else
{
 include_once '../View/operacaoNRealizada.php';
} 
}

//inserir
if(isset($_POST["btnAddOF"]))
{
 require_once '../Controller/OutrasFormacoesController.php';
 include_once '../Model/Usuario.php';
 $fController = new OutrasFormacoesController();

 if($fController->inserir(date('Y-m-d', strtotime($_POST['txtInicioOF'])), date('Y-md', strtotime($_POST["txtFimOF"])), $_POST["txtDescOF"], unserialize($_SESSION['Usuario']) ->getID()) != false)
 { 
 include_once '../View/informacaoInserida.php';
 }
 else
 {
 include_once '../View/operacaoNaoRealizada.php';
 }
}

//excluir

if(isset($_POST["btnExcluirOF"]))
{
 require_once '../Controller/OutrasFormacoesController.php';
 include_once '../Model/Usuario.php';
 $fController = new OutrasFormacoesController();
 
 if($fController->remover($_POST['id']) == true)
 { 
 include_once '../View/informacaoExcluida.php';
 }
 else
 {
 include_once '../View/operacaoNaoRealizada.php';
 }
}*/

?>
