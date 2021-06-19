<?php

class Blog {

    private $id;
    private $titulo;
    private $desccard;
    private $imgurl;
    private $descpost;
    


//id
public function setID($id){
    $this ->id = $id;
}
public function getID(){
    return $this -> id;
}
//titulo da postagem
public function setTitulo($titulo){
    $this -> titulo = $titulo;
}
public function getTitulo(){
    return $this -> titulo;
}
//descritivo para o card
public function setDesccard($desccard){
    $this -> desccard = $desccard;
}
public function getDesccard(){
    return $this -> desccard;
}
//url da imagem
public function setImgurl($imgurl){
    $this -> imgurl= $imgurl;
}
public function getImgurl(){
    return $this -> imgurl;
}

//Descritivo da postagem
public function setDescpost($descpost){
    $this ->descpost = $descpost;
}
public function getDescpost(){
    return $this -> descpost;
    
}


public function inserirBDBlog(){
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn-> connect_error){
        die ("conection failed: ". $conn->connect_error); 
    }
    $sql = "INSERT INTO blog (titulo, desccard, imgurl, descpost)
    VALUES ('".$this->titulo."', '".$this->desccard."', '".$this->imgurl."', '".$this->descpost."')";

    if ($conn->query($sql) === TRUE) {
        $this ->id = mysqli_insert_id($conn);
        $conn -> close();
        return TRUE;
    } else {
        $conn->close();
        return FALSE;
        }

    }

    public function listarPostagens()
    {
    require_once 'ConexaoBD.php'; 
    
    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * FROM blog;" ;
    $re = $conn->query($sql);
    $conn->close();
    return $re;
    }
}

?>