    <?php
    include_once 'headerBlog.php';

    // define variables and set to empty values
    $tituloErr = $descritivoErr = $imagemErr = $descPostErr  = "";
    $titulo = $descritivo = $comment = $imagem = $descPost = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["titulo"])) {
            $tituloErr = "O campo titulo é necessário";
        } else {
            $titulo = test_input($_POST["titulo"]);
        }

        if (empty($_POST["descritivo"])) {
            $descritivoErr = "O campo descritivo é necessário";
        } else {
            $descritivo = test_input($_POST["descritivo"]);
        }

        if (empty($_POST["imagem"])) {
            $imagemErr = "Precisa inserir a url de uma imagem";
        } else {
            $imagem = test_input($_POST["imagem"]);
        }

        if (empty($_POST["descPost"])) {
            $descPostErr = "Precisa inserir texto para o post";
        } else {
            $descPost = test_input($_POST["descPost"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="container">
        <h2 class="text-center">Insira dados do novo post do blog</h2>
        <p><span class="error text-center">* Campos que devem ser preenchidos</span></p>
        <form method="post" action="../CONTROLLER/navegacao.php">
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input type="titulo" class="form-control" placeholder="Digite o titulo do novo post" name="txtTituloBlog" >
                <span class="error">* </span>
            </div>
            <div class="form-group">
                <label for="descritivo">Descritivo para card:</label>
                <input class="form-control" type="text" placeholder="Digite um descritivo breve para o card da pagina principal do blog" name="txtDescCard">
                <span class="error">* </span>
            </div>
            <div class="form-group">
                <label for="Imagem">Imagem:</label>
                <input class="form-control" type="text" name="txtImgUrl" placeholder="Digite a url da imagem" >
                <span class="error"></span>
            </div>
            <div class="form-group">
                <label for="comment">Descritivo do post:</label>
                <textarea class="form-control" name="txtdescPost" rows="5"></textarea>
                <span class="error">*</span>
            </div>
            <button class="btn btn-primary"  name="btnSalvarPost" >Salvar</button>
        </form>
    </div>

    <section class="adoteCard">
        <div class="card col-8 m-4">
            <img class="img-fluid" src="<?php echo $imagem; ?>" alt="Card image cap" />
            <div class="card-body">
                <h3 class="card-title"><?php echo $titulo; ?></h3>
                <hr>
                <p class="card-text">
                    <?php echo $descPost; ?>
                </p>
            </div>
            <form action="blog.html"><button class="btn btn-outline-success m-4" type="submit">Voltar</button></form>
        </div>
        </div>
    </section>
   <?php
   include_once 'bota.php';
   ?>