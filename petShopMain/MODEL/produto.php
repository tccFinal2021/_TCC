<?php

class Produto{
    private $cod_produto;
    private $cod_embalagem;
    private $nome;
    private $validade;
    private $quantidade_estoque;
    private $valor;
    private $marca;
    private $descricao;



//id do produto no bd
public function setCodProduto($cod_produto){
    $this ->id = $cod_produto;
}
public function getCodProduto(){
    return $this -> cod_produto;
}
//codigo da embalagem
public function setCodEmbalagem($cod_embalagem){
    $this ->id = $cod_embalagem;
}
public function getCodEmbalagem(){
    return $this -> cod_embalagem;
}
//nome
public function setNome($nome){
    $this -> nome = $nome;
}
public function getNome(){
    return $this -> nome;
}
//Validade
public function setValidade($validade){
    $this -> validade = $validade;
}
public function getValidade(){
    return $this -> validade;
}
//Quantidade estoque 
public function setQuantidadeEstoque($quantidade_estoque){
    $this -> quantidade_estoque= $quantidade_estoque;
}
public function getQuantidadeEstoque(){
    return $this -> quantidade_estoque;
}
//valor
public function setValor($valor){
    $this ->valor =  $valor;
}
public function getValor(){
    return $this -> valor;
}
//marca
public function setMarca($marca){
    $this ->marca = $marca;
}
public function getMarca(){
    return $this -> marca;
    
}
//descricao
public function setDescricao($descricao){
    $this ->descricao = $descricao;
}
public function getDescricao(){
    return $this -> descricao;
    
}
public function inserirBD(){
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn-> connect_error){
        die ("conection failed: ". $conn->connect_error); 
    }
    $sql = "INSERT INTO produto (nome, cod_embalagem, validade, quantidade_estoque, valor, marca, descricao)
    VALUES ('".$this->nome."','".$this->cod_embalagem."', '".$this->validade."', '".$this->quantidade_estoque."', '".$this->valor."', '".$this->marca."', '".$this->descricao."')";

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