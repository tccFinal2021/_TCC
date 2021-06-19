<?php
if(!isset($_SESSION)){
    session_start();
}
class recebedorController{
    

    public function inserirBDR($nome, $email){
        require_once '../MODEL/receberNovdd.php';
        $recebedor = new recebedor();
        $recebedor->setNome($nome);
        $recebedor->setEmail($email);

        $r = $recebedor->inserirBDR();
        
        
    }

    public function gerarLista()
    {
        require_once '../MODEL/receberNovdd.php';
        
        $r = new Recebedor();
        
        return $results = $r->listaRecebedores();
    }
}


    ?>