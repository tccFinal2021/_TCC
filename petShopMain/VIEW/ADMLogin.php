<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <div id="container">
        <div class="form-wrap">
          <h1>Entre como Administrador</h1>
          <p>Faça o login</p>
          <form action="../CONTROLLER/navegacao.php">            
            <div class="form-group">
              <label for="txtEmail">Email</label>
              <input type="email" name="txtEmail" />
            </div>
            <div class="form-group">
              <label for="txtSenha">Senha</label>
              <input type="password" name="txtSenha"/>
            </div>
            <div>
                <input type="checkbox" id="lembrar" name="lembrar">
                <label for="login">Lembrar-se</label>
            </div>
            <button name="btnLogandoAdm" type="submit" class="btn" value="">
            Entrar
            </button>
          </form>
          <footer>
          <p>Não tem uma conta? Solicite a algum administrador inserir seu cadastro</a></p> 
          
        </footer>
        </div>
        
        <div>
         
        </div>
      </div>
      <script src="js/app.js"></script>
</body>
</html>