<?php

class Recebedor{
    private $id;
    private $nome;
    private $email;


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
    $this -> email= $email;
}
public function getEmail(){
    return $this -> email;
}


public function inserirBDR(){
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn-> connect_error){
        die ("conection failed: ". $conn->connect_error); 
    }
    $sql = "INSERT INTO recebernovdd (nome, email)
    VALUES ('".$this->nome."', '".$this->email."')";

    if ($conn->query($sql) === TRUE) {
        $this ->id = mysqli_insert_id($conn);
        $conn -> close();
        return TRUE;
    } else {
        $conn->close();
        return FALSE;
        }

    }
}
    ?>
