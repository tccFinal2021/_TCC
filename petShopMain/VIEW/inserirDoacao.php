
    <?php
        include_once 'header.php';

    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $telefoneErr = $caractErr  = $saudeErr = "";
    $name = $email = $gender = $comment = $telefone = $caract = $saude = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "O campo nome é necessário";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Apenas letras e espaço é permitido";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "O campo email é necessário";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Formato de email invalido";
            }
        }

        if (empty($_POST["telefone"])) {
            $telefoneErr = "Precisa inserir o numero de telefone";
        } else {
            $telefone = test_input($_POST["telefone"]);
        }

        if (empty($_POST["caract"])) {
            $caractErr = "Precisa inserir as caracteristicas do seu pet";
        } else {
            $caract = test_input($_POST["caract"]);
        }

        if (empty($_POST["saude"])) {
            $saudeErr = "Precisa inserir as dados sobre a saude do seu pet";
        } else {
            $saude = test_input($_POST["saude"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Precisa escolher o sexo";
        } else {
            $gender = test_input($_POST["gender"]);
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
        <h2 class="text-center">Insira os dados do seu pet</h2>
        <p><span class="error text-center">* Campos que devem ser preenchidos</span></p>
        <form action="../CONTROLLER/navegacao.php" method="post" >
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="name" class="form-control"  placeholder="Digite nome do seu pet" name="txtNome" >
                <span class="error">* </span>
            </div>
            <div class="form-group">
                <label for="email">E-mail do doador:</label>
                <input class="form-control" type="email" placeholder="Digite seu email" name="txtEmail">
                <span class="error">*</span>
            </div>
            <div class="form-group">
                <label for="email">Telefone:</label>
                <input class="form-control" type="number" name="txtTel" placeholder="Digite o numero do seu telefone">
                <span class="error">*</span>
            </div>
            <div class="form-group">
                <label for="comment">Caracteristicas:</label>
                <textarea class="form-control" name="txtCaracteristicas" rows="5" ></textarea>
                <span class="error">* </span>
            </div>
            <div class="form-group">
                <label for="comment">Saúde:</label>
                <textarea class="form-control" name="txtSaude" rows="5" ></textarea>
            <span class="error">* </span>
            </div>
            <span>Sexo:</span>
            <input type="radio" name="txtSexof"> Femea
            <input type="radio" name="txtSexom" >Macho
            <span class="error">* </span>
            <br><br>
            <button class="btn btn-primary" name="btnCadPet"  >
            Cadastrar Pet
            </button>
        </form>
    </div>

    <section class="adoteCard" >
        <div class="card col-8 m-4">
            <img class="img-fluid" src="https://images.squarespace-cdn.com/content/v1/53bb46d6e4b05c06d49b574b/1584922821908-NGKK7OKW5HBQUV9FJNHJ/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/Jaden_crop.jpg?format=2500w" alt="Card image cap" />
            <div class="card-body">
                <h3 class="card-title"><?php echo $name; ?></h3>
                <hr>
                <h4 class="card-title text-center"><?php echo $gender; ?></h4>
                <h3 class="card-title">Caracteristicas</h3>
                <p class="card-text">
                    Conheça <?php echo $name; ?>: <?php echo $caract; ?>
                </p>
                <hr>
                <h3>Saúde</h3>
                <p class="card-text">
                    <?php echo $saude; ?>
                </p>
            </div>
            <hr>
            <form action=""><button class="btn btn-outline-success m-4" type="submit">Adotar</button></form>
        </div>
        </div>
    </section>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-3.6.0.slim.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>