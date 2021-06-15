<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/signin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="container">
        <div class="form-wrap">
          <h1>Entre</h1>
          <p>Faça o login</p>
          <form action="../CONTROLLER/navegacao.php">            
            <div class="form-group">
              <label for="txtEmail">Email</label>
              <input type="email" name="txtEmail" id="email" />
            </div>
            <div class="form-group">
              <label for="txtSenha">Senha</label>
              <input type="password" name="txtSenha"/>
            </div>
            <div>
                <input type="checkbox" id="lembrar" name="lembrar">
                <label for="login">Lembrar-se</label>
            </div>
            <button name="btnLogar" type="submit" class="btn" value="">
            Entrar
            </button>
          </form>
          <footer>
          <p>Não tem uma conta? <a href="signup.php">Faça o cadastro aqui</a></p>
        </footer>
        </div>
      </div>
      <script src="js/app.js"></script>
</body>
</html>