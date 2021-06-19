<?php
/*if(!isset($_SESSION)){
    session_start();
}*/
class BlogController{
    

    public function inserirBDBlog($titulo, $desccard, $imgurl, $descpost){
        require_once '../MODEL/blog.php';
        $blog = new Blog();
        $blog->setTitulo($titulo);
        $blog->setDesccard($desccard);
        $blog->setImgurl($imgurl);
        $blog->setDescpost($descpost);

        $r = $blog->inserirBDBlog();
        //$_SESSION['Usuario'] = serialize($usuario);
        return $r;
    }

    public function gerarLista()
    {
        require_once '../MODEL/blog.php';
        
        $b = new Blog();
        
        return $results = $b->listarPostagens();
    }



}


?>