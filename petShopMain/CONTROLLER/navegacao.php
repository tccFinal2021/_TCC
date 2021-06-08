<?php
if (!isset($_SESSION)){
    session_start();
}



if(isset($_POST["btnCadastrar"])){

        require_once'usuarioController.php';
        $uController= new UsuarioController();
        if($uController->inserirBD($_POST["txtNome"], $_POST["sobrenome"], $_POST["txtEmail"], $_POST["txtSenha"])){           
            include_once'../View/cadastroRealizado.php';
        }
        else
        {
            include_once'../View/cadastroNaoRealizado.php';
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












?>