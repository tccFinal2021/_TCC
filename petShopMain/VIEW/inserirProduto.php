<?php
    include_once 'header.php';
?>
    <div class="container" style="background-color: #d3d3d3;">
        <h2 class="text-center">Insira dados do novo produto</h2>
        <p><span class="error text-center">* Campos que devem ser preenchidos</span></p>
        <form method="post" action="../CONTROLLER/navegacao.php">

            <div class="form-group">
                <label for="txtNomeProd">Nome do Produto:</label>
                <input type="text" class="form-control" placeholder="Digite o nome do novo produto" name="txtNomeProd" >
                <span class="error">* </span>
            </div>

            <div class="form-group">
                <label for="txtCodEmbalagem">Código da embalagem:</label>
                <input class="form-control" type="number" placeholder="Digite o código da embalagem do produto" name="txtCodEmbalagem">
                <span class="error">* </span>
            </div>

            <div class="form-group">
                <label for="dataValidade">Data de Validade:</label>
                <input class="form-control" type="date" name="dataValidade">
                <span class="error"></span>
            </div>

            <div class="form-group">
                <label for="txtQuantidadeProd">Quantidade em Estoque:</label>
                <input class="form-control" type="number" placeholder="Digite a quantidade de produtos em estoque" name="txtQuantidadeProd">
                <span class="error">* </span>
            </div>

            <div class="form-group">
                <label for="txtValorProd">Valor:</label>
                <input class="form-control" type="number" placeholder="Digite o valor do produto" name="txtValorProd">
                <span class="error">* </span>
            </div>

            <div class="form-group">
                <label for="txtMarcaProd">Marca do Produto:</label>
                <input type="text" class="form-control" placeholder="Digite a marca produto" name="txtMarcaProd" >
                <span class="error">* </span>
            </div>

            <div class="form-group">
                <label for="txtDescProd">Descrição do produto:</label>
                <textarea class="form-control" name="txtDescProd" rows="2"></textarea>
                <span class="error">*</span>
            </div>

            <button class="btn btn-primary"  name="btnInserirProd" >Salvar</button>
        </form>
    </div>

    
   <?php
   include_once 'bota.php';
   ?>