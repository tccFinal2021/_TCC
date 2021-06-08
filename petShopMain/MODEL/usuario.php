<?php
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
            if ($conn-> conect_error){
                die ("Falha na Conexão: ". $conn->conect_error); 
            }
            
            //inserindo dados na tabela usuario
            $sql = "INSERT INTO usuarioTESTE (nome, sobrenome, email, senha)
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
            //funçao de busca ao bd
            public function carregarUsuario (){
                require_once 'ConexaoBD.php';
        
                $con = new ConexaoBD();
                $conn = $con->conectar();
                if ($conn->conect_error){
                    die("conection failed: ".$conn->connect_error);
                }
                $sql = "SELECT * FROM usuarioTESTE WHERE id = ".$id; 
                $re =  $conn->query($sql);
                $r = $re->fetch_object();
                if ($r != null){
                    $this->id = $r->id_user;
                    $this->nome = $r->nome;
                    $this->sobrenome = $r->sobrenome;
                    $this->email = $r-> email;
                    $this ->senha = $r->senha;
                    $conn->close();
                    return true;
                    } else {
                        $conn->close();
                        return false;
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