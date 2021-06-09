
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
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="name" class="form-control" id="email" placeholder="Digite nome do seu pet" name="name" value="<?php echo $name; ?>">
                <span class="error">* <?php echo $nameErr; ?></span>
            </div>
            <div class="form-group">
                <label for="email">E-mail do doador:</label>
                <input class="form-control" type="text" placeholder="Digite seu email" name="email" value="<?php echo $email; ?>">
                <span class="error">* <?php echo $emailErr; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Telefone:</label>
                <input class="form-control" type="number" name="telefone" placeholder="Digite o npumero do seu telefone" value="<?php echo $telefone; ?>">
                <span class="error"><?php echo $telefoneErr; ?></span>
            </div>
            <div class="form-group">
                <label for="comment">Caracteristicas:</label>
                <textarea class="form-control" name="caract" rows="5" id="caract"><?php echo $caract; ?></textarea>
                <span class="error">* <?php echo $caractErr; ?></span>
            </div>
            <div class="form-group">
                <label for="comment">Saúde:</label>
                <textarea class="form-control" name="saude" rows="5" id="comment"><?php echo $saude; ?></textarea>
            <span class="error">* <?php echo $saudeErr; ?></span>
            </div>
            <span>Sexo:</span>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "femea") echo "checked"; ?> value="femea">Femea
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "macho") echo "checked"; ?> value="macho">Macho
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>

    <section class="adoteCard">
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