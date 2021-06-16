<?php
if(!isset($_SESSION)){
    session_start();
}
class AdmController{
    

    public function inserirBD($nome, $sobrenome, $email, $senha){
        require_once '../MODEL/adm.php';
        $adm = new adm();
        $adm->setNome($nome);
        $adm->setSobrenome($sobrenome);
        $adm->setEmail($email);
        $adm->setSenha($senha);

        $r = $adm->inserirBD();
        $_SESSION['Administrador'] = serialize($adm);
        return $r;
    }


    public function atualizar($id, $nome, $sobrenome, $email, $dataNascimento){
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
}
?>