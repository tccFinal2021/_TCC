<?php

if(!isset($_SESSION))
{ 
    session_start(); 
} 

    class Usuario{
        private $id;
        private $nome;
        private $sobrenome;
        private $email;
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
            $this ->nome = $nome;
        }
        public function getNome(){
            return $this -> nome;
        }
        //Sobrenome
        public function setSobrenome($sobrenome){
            $this ->sobrenome = $sobrenome;
        }
        public function getSobrenome(){
            return $this -> sobrenome;
        }
        //email
        public function setEmail($email){
            $this ->email = $email;
        }
        public function getEmail(){
            return $this -> email;
        }

        //senha
        public function setSenha($senha){
            $this ->senha = $senha;
        }
        public function getSenha(){
            return $this -> senha;
            
        }

       

        
        

        //função de inserção de dados no banco
        public function inserirBD(){

            //inserindo arq de conexão ao banco
            require_once 'ConexaoBD.php';
            //verificando 
            $con = new ConexaoBD();
            $conn = $con->conectar();
            if ($conn-> connect_error){
                die ("Falha na Conexão: ". $conn->connect_error); 
            }
            
            //inserindo dados na tabela usuario
            $sql = "INSERT INTO usuario (nome, sobrenome, email, senha)
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
            //Funçao de busca dados no bd para validar o login
            public function logarBD(){
                
                require_once 'ConexaoBD.php';
        
                $con = new ConexaoBD();
                $conn = $con->conectar();
                if ($conn->connect_error){
                    die("conection failed: ".$conn->connect_error);
                }
                $sql = "SELECT * FROM usuario WHERE email = '".$this->email."';";
                $re =  $conn->query($sql);
                //echo sql
                $linha = mysqli_fetch_array($re);
                if ($linha != null)
                {
                    if($linha['senha'] == $this->senha)
                    {
                        $_SESSION['logado'] = $this->email;
                        $_SESSION['nome'] = $linha['nome'];
                        return TRUE;
                        
                    }   
                else 
                {
                        return FALSE;
                        $conn->close();
                }
                }
            }

            //alteraçao de dados
            public function atualizarBD(){
                require_once 'conexaoBD.php';
                $con = new ConexaoBD();
                $conn = $con->conectar();
                if ($conn->connect_error){
                    die("conection failed: ". $conn->connect_error);
        
                }
                $sql = "UPDATE usuario SET nome = '".$this->nome."', sobrenome ='".$this->sobrenome."', 
                /*dataNascimento = 
                '".$this->dataNascimento."',
                */
                 email= '".$this->email."' WHERE idusuario = '".$this->id."'" ;
                if ($conn->query($sql) === TRUE) {
                    $conn -> close();
                    return TRUE;
                } else {
                    $conn-> close();
                    return FALSE;
                }
            }

        

    //fechamento da classe
    }

?>