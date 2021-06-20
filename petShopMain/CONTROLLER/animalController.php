<?php

class AnimalController{
    

    public function inserirBDA($nome, $email, $tel, $especie, $caracteristicas, $imgurl, $saude, $sexo){
        require_once '../MODEL/animal.php';
        $animal = new Animal();
        $animal->setNome($nome);
        $animal->setEmail($email);
        $animal->setTel($tel);
        $animal->setEspecie($especie);
        $animal->setCaracteristicas($caracteristicas);
        $animal->setImgUrl($imgurl);
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

    public function listarGatos()
    {
        require_once '../MODEL/animal.php.php';
        
        $a = new Animal();
        
        return $results = $a->listarGatos();
    }

    public function listarCachorros()
    {
        require_once '../MODEL/animal.php.php';
        
        $a = new Animal();
        
        return $results = $a->listarCachorros();
    }
}
?>