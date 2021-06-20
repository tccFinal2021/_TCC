<?php

class Animal{
    private $id;
    private $nome;
    private $email;
    private $tel;
    private $especie;
    private $caracteristicas;
    private $imgurl;
    private $saude;
    private $sexo;


//id
public function setID($id){
    $this ->id = $id;
}
public function getID(){
    return $this -> id;
}
//nome
public function setNome($nome){
    $this -> nome = $nome;
}
public function getNome(){
    return $this -> nome;
}
//email
public function setEmail($email){
    $this -> email = $email;
}
public function getEmail(){
    return $this -> email;
}
//tel
public function setTel($tel){
    $this -> tel= $tel;
}
public function getTel(){
    return $this -> tel;
}
//especie
public function setEspecie($especie){
    $this -> especie= $especie;
}
public function getEspecie(){
    return $this -> especie;
}
//caracteristicas
public function setCaracteristicas($caracteristicas){
    $this ->caracteristicas =  $caracteristicas;
}
public function getCaracteristicas(){
    return $this -> caracteristicas;
}
//img url
public function setImgUrl($imgurl){
    $this ->imgurl = $imgurl;
}
public function getImgUrl(){
    return $this -> imgurl;   
}

//saude
public function setSaude($saude){
    $this ->saude = $saude;
}
public function getSaude(){
    return $this -> saude;
    
}

//sexo
public function setSexo($sexo){
    $this ->sexo = $sexo;
}
public function getSexo(){
    return $this -> sexo;
    
}

public function inserirBDA(){
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn-> connect_error){
        die ("conection failed: ". $conn->connect_error); 
    }
    $sql = "INSERT INTO animaldois (nome, email, tel, especie, caracteristicas, imgurl, saude, sexo)
    VALUES ('".$this->nome."', '".$this->email."', '".$this->tel."', '".$this->especie."', '".$this->caracteristicas."', '".$this->imgurl."', '".$this->saude."', '".$this->sexo."')";

    if ($conn->query($sql) === TRUE) {
        $this ->id = mysqli_insert_id($conn);
        $conn -> close();
        return TRUE;
    } else {
        $conn->close();
        return FALSE;
        }

    }

    public function listarAnimais()
        {
            require_once 'ConexaoBD.php'; 
            
            $con = new ConexaoBD();
            $conn = $con->conectar();
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "SELECT * FROM animaldois;" ;
            $re = $conn->query($sql);
            $conn->close();
            return $re;
        }

    public function listarGatos()
    {
        require_once 'ConexaoBD.php'; 
        
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT * FROM animaldois WHERE especie = 'gato'||'gata';" ;
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
    public function listarCachorros()
    {
        require_once 'ConexaoBD.php'; 
        
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT * FROM animaldois WHERE especie = 'cachorro'||'cachorra';" ;
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
?>