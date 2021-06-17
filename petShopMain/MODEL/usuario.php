<?php

class Usuario{
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $dataNascimento;
    private $senha;


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
//cpf
public function setSobrenome($sobrenome){
    $this -> sobrenome = $sobrenome;
}
public function getSobrenome(){
    return $this -> sobrenome;
}
//email
public function setEmail($email){
    $this -> email= $email;
}
public function getEmail(){
    return $this -> email;
}
//dataNascimento
public function setDataNascimento($dataNascimento){
    $this ->dataNascimento =  $dataNascimento;
}
public function getDataNascimento(){
    return $this -> dataNascimento;
}
//senha
public function setSenha($senha){
    $this ->senha = $senha;
}
public function getSenha(){
    return $this -> senha;
    
}

public function inserirBD(){
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn-> connect_error){
        die ("conection failed: ". $conn->connect_error); 
    }
    $sql = "INSERT INTO usuarioteste (nome, sobrenome, email, senha)
    VALUES ('".$this->nome."', '".$this->sobrenome."', '".$this->email."', '".$this->senha."')";

    if ($conn->query($sql) === TRUE) {
        $this ->id = mysqli_insert_id($conn);
        $conn -> close();
        return TRUE;
    } else {
        $conn->close();
        return FALSE;
        }

    }
/*
    public function carregarUsuario (){
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error){
            die("conection failed: ".$conn->connect_error);
        }
        $sql = "SELECT * FROM usuario WHERE id = ".$id; 
        $re =  $conn->query($sql);
        $r = $re->fetch_object();
        if ($r != null){
            $this->id = $r->idusuario;
            $this->nome = $r->nome;
            $this->email = $r-> email;
            $this ->sobrenome = $r-> sobrenome;
            $this ->dataNascimento = $r->getDataNascimento;
            $this ->senha = $r->senha;
            $conn->close();
            return true;
            } else {
                $conn->close();
                return false;
            }
    }*/
    public function atualizarBD(){
        require_once 'conexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error){
            die("conection failed: ". $conn->connect_error);

        }
        $sql = "UPDATE usuarioteste SET nome = '".$this->nome."', sobrenome ='".$this->sobrenome."', dataNascimento = '".$this->dataNascimento."', email= '".$this->email."' WHERE idusuario = '".$this->id."'" ;
        if ($conn->query($sql) === TRUE) {
            $conn -> close();
            return TRUE;
        } else {
            $conn-> close();
            return FALSE;
        }
    }

    public function excluirBD(){
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        
        if ($conn->connect_error){
            die("conection failed: ". $conn->connect_error);
        }

        $sql = "DELETE FROM usuarioteste where id = '".$id."';";
        if ($conn->query($sql) === TRUE) {
            $conn -> close();
            return TRUE;
        } else {
            $conn-> close();
            return FALSE;
        }
    }


 
}
?>