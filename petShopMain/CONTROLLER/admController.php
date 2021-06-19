<?php
if(!isset($_SESSION)){
    session_start();
}
class AdmController{
    

    public function inserirBD($nome, $sobrenome, $dataNascimento, $email, $senha){
        require_once '../MODEL/adm.php';
        $adm = new adm();
        $adm->setNome($nome);
        $adm->setSobrenome($sobrenome);
        $adm->setDataNascimento($dataNascimento);
        $adm->setEmail($email);
        $adm->setSenha($senha);
        $r = $adm->inserirBD();
        $_SESSION['Administrador'] = serialize($adm);
        return $r;
    }


    public function atualizar($id, $nome, $sobrenome,$dataNascimento, $email ){
        require_once '../MODEL/adm.php';
        $adm = new usuario();
        $adm->setId($id);
        $adm->setNome($nome);
        $adm->setSobrenome($sobrenome);
        $adm->setEmail($email);
        $adm->setDataNascimento($dataNascimento);
        $r = $adm->atualizarBD();
        $_SESSION['adm'] = serialize($adm);
        return $r;
    }

    
    
    public function login($email, $senha)
    {
        require_once '../MODEL/adm.php';
        $adm = new Adm();
        $adm->carregarAdm($email);
        if($adm->getSenha() == $senha)
        {
            $_SESSION['Adm'] = serialize($adm);
            return true;
        }
        else
        {
            return false;
        } 
    }

    public function gerarLista()
    {
        require_once '../MODEL/adm.php';
        
        $a = new Adm();
        
        return $results = $a->listaAdm();
    }
}
   ?>
   




