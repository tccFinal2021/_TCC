<?php
if(!isset($_SESSION)){
    session_start();
}
class UsuarioController{
    

    public function inserir($nome, $sobrenome, $email, $senha){
        require_once '../MODEL/Usuario.php';
        $usuario = new usuario();
        $usuario->setNome($nome);
        $usuario->setSobrenome($sobrenome);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        //return $usuario->getNome();

        $r = $usuario->inserirBD();
        $_SESSION['Usuario'] = serialize($usuario);
        return $r;
    }


    public function atualizar($id, $nome, $sobrenome, $email, $dataNascimento){
        require_once '../MODEL/Usuario.php';
        $usuario = new usuario();
        $usuario->setId($id);
        $usuario->setNome($nome);
        $usuario->setSobrenome($sobrenome);
        $usuario->setEmail($email);
        $usuario->setDataNascimento($dataNascimento);
        $r = $usuario->atualizarBD();
        $_SESSION['usuario'] = serialize($usuario);
        return $r;
    }
}
?>