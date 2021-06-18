<?php

class ProdutoController{
    

    public function inserir($cod_embalagem, $nome, $validade, $quantidade_estoque, $valor, $marca, $descricao){
        require_once '../MODEL/produto.php';
        $produto = new Produto();
        $produto->setCodEmbalagem($cod_embalagem);
        $produto->setNome($nome);
        $produto->setValidade($validade);
        $produto->setQuantidadeEstoque($quantidade_estoque);
        $produto->setValor($valor);
        $produto->setMarca($marca);
        $produto->setDescricao($descricao);

        $r = $produto->inserirBD();
        //$_SESSION['Usuario'] = serialize($usuario);
        return $r;
    }

    public function gerarLista()
    {
        require_once '../MODEL/produto.php';
        
        $p = new Produto();
        
        return $results = $p->listaProdutos();
    }
}
?>