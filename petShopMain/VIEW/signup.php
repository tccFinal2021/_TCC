<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="container">
    
      <div class="form-wrap">
        <h1>Cadastro</h1>
        <p>É de graça e leva apenas um minuto</p>
        <form action="../CONTROLLER/navegacao.php" method="post">

          <div class="form-group">
            <label for="txtNome">Primeiro nome</label>
            <input type="text" name="txtNome" />
          </div>

          <div class="form-group">
            <label for="txtSobrenome">Ultimo nome</label>
            <input type="text" name="txtSobrenome"/>
          </div>

          <div class="form-group">
            <label for="txtDataNasc">Data de Nascimento</label>
            <input type="date" name="txtDataNasc"/>
          </div>

          <div class="form-group">
            <label for="txtEmail">Email</label>
            <input type="email" name="txtEmail"/>
          </div>
        
          <div class="form-group">
            <label for="txtSenha">Senha</label>
            <input type="password" name="txtSenha"/>
          </div>

          <div class="form-group">
            <label for="txtSenha2">Confirme a senha</label>
            <input type="password" name="txtSenha2" />
          </div>
      

          <button name="btnCadastrar"  class="btn" >Cadastrar</button>
          <p class="bottom-text">
            Clicando no botão acima vc concorda con nossos
            <a href="#">Termos e condições</a> and
            <a href="#">Termos de privacidade</a>
          </p>
          
        </form>
        <footer>
        <p>Já tem uma conta? <a href="signin.php">Entrar aqui</a></p>
      </footer>
      </div>
    </div>
    <script src="js/app.js"></script>
  </body>
</html>
