<?php
/*
if(!isset($_SESSION)){
    session_start();
}*/
class AnimalController{
    

    public function inserirBDA($nome, $email, $tel, $caracteristicas, $saude, $sexo){
        require_once '../MODEL/animal.php';
        $animal = new Animal();
        $animal->setNome($nome);
        $animal->setEmail($email);
        $animal->setTel($tel);
        $animal->setCaracteristicas($caracteristicas);
        $animal->setSaude($saude);
        $animal->setSexo($sexo);


        $r = $animal->inserirBDA();
       
        return $r;
    }

    public function gerarLista()
    {
        require_once '../MODEL/animal.php.php';
        
        $a = new Animal();
        
        return $results = $a->listarAnimais();
    }
}
?>