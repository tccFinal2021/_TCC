<?php
    include_once 'header.php';
?>


<section class="container">
      <div class="row">
        <div class="card col-md-12 col-lg-5 m-4" id="firstCard">
          <img
            class="card-img-top img-fluid"
            src="https://d17fnq9dkz9hgj.cloudfront.net/uploads/2017/10/PF2015_267_Kittens_Shelter-630.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <h4 class="card-title">Veja os gatos</h4>
            <p class="card-text">
              Se você está querendo adotar um gato, tem um te esperando aqui.
            </p>
          </div>
          <div class="card-body">
            <form action="/adocao/caoExemplo.html">
              <button
                class="btn btn-outline-success"
                id="loginButton"
                type="button"
              >
                Procurar gatos
              </button>
            </form>
          </div>
        </div>

        <div class="card col-md-12 col-lg-5 m-4" id="secondCard">
          <img
            class="card-img-top img-fluid"
            src="https://images.squarespace-cdn.com/content/v1/53bb46d6e4b05c06d49b574b/1584922821908-NGKK7OKW5HBQUV9FJNHJ/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/Jaden_crop.jpg?format=2500w"
            alt="Card image cap"
          />
          <div class="card-body">
            <h4 class="card-title">Veja os cães</h4>
            <p class="card-text">
              Se você está querendo adotar um cão, tem um te esperando aqui.
            </p>
          </div>
          <form action="adocao/caoExemplo.html">
            <button class="btn btn-outline-success" type="submit">
              Cadastrar
            </button>
          </form>
        </div>
      </div>
    </section>

<?php
    include_once 'bota.php';
?>