<?php

  class receberNovdd {
      private $nome;
      private $email;

      //nome
      public function setNome($nome){
        $this ->nome = $nome;
    }
    public function getNome(){
        return $this -> nome;
    }
    //email
    public function setEmail($email){
        $this ->email = $email;
    }
    public function getEmail(){
        return $this -> email;
    }

     //função de inserção de dados no banco
     public function inserirBDRecebedor(){

        //inserindo arq de conexão ao banco
        require_once 'ConexaoBD.php';
        //verificando 
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn-> conect_error){
            die ("Falha na Conexão: ". $conn->conect_error); 
        }
        
        //inserindo dados na tabela recebernovdd
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

         //funçao de busca ao bd
         public function carregarRecebedor (){
            require_once 'ConexaoBD.php';
    
            $con = new ConexaoBD();
            $conn = $con->conectar();
            if ($conn->conect_error){
                die("conection failed: ".$conn->connect_error);
            }
            $sql = "SELECT * FROM recebernovdd WHERE id = ".$id; 
            $re =  $conn->query($sql);
            $r = $re->fetch_object();
            if ($r != null){
                $this->nome = $r->nome;
                $this->email = $r-> email;
                $conn->close();
                return true;
                } else {
                    $conn->close();
                    return false;
                }
        }

  }

?>