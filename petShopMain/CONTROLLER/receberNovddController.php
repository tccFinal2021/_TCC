<?php
class receberNovddController{

    public function inserirBDRecebedor($nome, $email){
        require_once '../MODEL/receberNovdd.php';
        $usuario = new receberNovdd();
        $usuario->setNome($nome);
        $usuario->setEmail($email);
       

        
        $r = $usuario->inserirBDRecebedor();
        $_SESSION['Usuario'] = serialize($usuario);
        return $$r;
    }



}

?>