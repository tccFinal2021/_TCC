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
          <form action="../tttt.php">            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" />
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" name="password" id="password" />
            </div>
            <div>
                <input type="checkbox" id="lembrar" name="lembrar">
                <label for="login">Lembrar-se</label>
            </div>
            <button id="btnLogar" type="submit" class="btn">Entrar</button>
          </form>
          <footer>
          <p>Não tem uma conta? <a href="signup.html">Faça o cadastro aqui</a></p>
        </footer>
        </div>
      </div>
      <script src="js/app.js"></script>
</body>
</html>